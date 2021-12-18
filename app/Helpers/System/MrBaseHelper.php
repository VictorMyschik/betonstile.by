<?php

namespace App\Helpers\System;

use App\Http\Controllers\Controller;
use App\Models\System\MrLog;
use App\Models\System\MrProxyServer;
use FilesystemIterator;
use Symfony\Component\HttpFoundation\Response;

/*
 * Common helpers
 *
 *
 */

abstract class MrBaseHelper extends Controller
{
  const MR_EMAIL = 'support@mymarket.ml';
  const MR_SITE_NAME = 'MyMarket';
  const MR_DOMAIN = 'MyMarket';
  const MR_SITE_URL = 'https://mymarket.ezon.by';

  const ADMIN_PHONE = '375297896282';
  const ADMIN_PHONE_FORMAT = '+375(29)789-62-82';
  const ADMIN_TELEGRAM = 'tg://resolve?domain=Allximik50';
  const ADMIN_VIBER = 'viber://chat?number=375297896282';

  /**
   * Generate short link
   *
   * @param string $url
   * @return string
   */
  public static function GetShortLink(string $url): string
  {
    return @file_get_contents("https://clck.ru/--?url=" . $url) ?? $url;
  }

  /**
   * Send Mail
   *
   * @param string $email_to
   * @param string $subject
   * @param string $message
   * @return bool
   */
  public static function SendEmail(string $email_to, string $subject, string $message): bool
  {
    if(preg_match('/\S+@\S+\.\S+/', $email_to))
    {
      $headers = "Content-type: text/html; charset=UTF8 \r\n";
      $headers .= "From: " . MrBaseHelper::MR_EMAIL . "\r\n";

      return mail($email_to, $subject, $message, $headers);
    }

    return false;
  }

  /**
   * Generate random str
   *
   * @param int $length
   * @return string
   */
  public static function GenerateRandomString($length = 10): string
  {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for($i = 0; $i < $length; $i++)
    {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
  }


  public static function CreateDir(string $dir)
  {
    if(!file_exists($dir))
    {
      mkdir($dir, 0777);
    }
  }

  /**
   * Удаление директории со всеми файлами и папками внутри
   *
   * @param $dir
   */
  public static function DirDelete($dir)
  {
    if(!file_exists($dir))
    {
      return;
    }

    $includes = new FilesystemIterator($dir);

    foreach($includes as $include)
    {
      if(is_dir($include) && !is_link($include))
      {
        self::DirDelete($include);
      }
      else
      {
        unlink($include);
      }
    }

    rmdir($dir);
  }

  /**
   * Smart загрузка данных по ссылке
   * Если есть proxy - будет использовать каждый раз новый адрес из списка доступных (активных)
   *
   * $never_proxy - принудительно запретить прокси: false - можно использовать прокси, true -
   * блокировать прокси
   *
   * @param string $url
   * @param bool $use_proxy
   * @param bool $never_proxy
   * @return bool|string
   */
  public static function loadUrlData(string $url, bool $use_proxy = false, bool $never_proxy = false)
  {
    // Первая попытка без прокси
    if(!$use_proxy || !env('USE_PROXY'))
    {
      // вторая уже с прокси
      if(!$result = self::__Load($url))
      {
        MrLog::Add(MrLog::KIND_WARNING, MrLog::TITLE_OUT_DATA, 'Без прокси не работает: ' . $url);

        if(!$never_proxy)
        {
          return self::loadUrlData($url, true);
        }
      }

      return $result;
    }

    if(env('USE_PROXY'))
    {
      $used_proxy = array();
      $i = 5; // max retry with proxy

      for($fresh_proxy = MrProxyServer::GetFreshAddress(); !is_null($fresh_proxy); $fresh_proxy = MrProxyServer::GetFreshAddress())
      {
        // если сервера закончатся - выход
        if($fresh_proxy && !isset($used_proxy[$fresh_proxy->id()]))
        {
          $used_proxy[$fresh_proxy->id()] = $fresh_proxy; // запись уже использованный адрес

          if($result = self::__Load($url, $fresh_proxy->getAddress()))
          {
            return $result;
          }
        }

        if($i === 5)
        {
          abort(Response::HTTP_INTERNAL_SERVER_ERROR, 'Remote url unavailable');
        }

        $i++;
      }
    }

    abort(Response::HTTP_INTERNAL_SERVER_ERROR, 'Proxy disabled');
  }

  /**
   * Загрузка по URL
   *
   * @param string $url
   * @param string|null $use_proxy_address
   * @return bool|string
   */
  private static function __Load(string $url, string $use_proxy_address = null)
  {
    // Время подключения к серверу, сек.
    $timeout = 2;

    //$proxyauth = 'shnniqpy-dest:t6rg5yro28ug';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36 OPR/72.0.3815.186');
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");

    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    if($use_proxy_address)
    {
      curl_setopt($ch, CURLOPT_PROXY, $use_proxy_address);
      //curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }

    // run the query
    return curl_exec($ch);
  }

  public static function translit($s)
  {
    $s = (string)$s;                                                            // преобразуем в строковое значение
    $s = strip_tags($s);                                                        // убираем HTML-теги
    $s = str_replace(array("\n", "\r"), " ", $s);                               // убираем перевод каретки
    $s = preg_replace("/\s+/", ' ', $s);                                        // удаляем повторяющие пробелы
    $s = trim($s);                                                              // убираем пробелы в начале и конце строки
    $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
    $s = strtr($s, array('а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'j', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ы' => 'y', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'ъ' => '', 'ь' => ''));
    $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
    $s = str_replace(" ", "-", $s);               // заменяем пробелы знаком минус

    return $s;                                    // возвращаем результат
  }

  private static $date_words = array(
    ['год', 'года', 'лет'],
    ['месяц', 'месяца', 'месяцев'],
    ['неделя', 'недели', 'недель'],
    ['день', 'дня', 'дней'],
    ['сутки', 'суток', 'суток'],
    ['час', 'часа', 'часов'],
    ['минута', 'минуты', 'минут'],
    ['секунда', 'секунды', 'секунд'],
    ['микросекунда', 'микросекунды', 'микросекунд'],
    ['миллисекунда', 'миллисекунды', 'миллисекунд'],
  );

  public static function num_word($value, $words, $show = true)
  {
    $num = $value % 100;
    if($num > 19)
    {
      $num = $num % 10;
    }

    $out = ($show) ? $value . ' ' : '';
    switch($num)
    {
      case 1:
        $out .= $words[0];
        break;
      case 2:
      case 3:
      case 4:
        $out .= $words[1];
        break;
      default:
        $out .= $words[2];
        break;
    }

    return $out;
  }

  public static function getUploadMaxSize()
  {
    static $max_size = -1;

    if($max_size < 0)
    {
      // Start with post_max_size.
      $max_size = (ini_get('post_max_size'));

      // If upload_max_size is less, then reduce. Except if upload_max_size is
      // zero, which indicates no limit.
      $upload_max = (ini_get('upload_max_filesize'));
      if((int)$upload_max > 0 && (int)$upload_max < (int)$max_size)
      {
        $max_size = $upload_max;
      }
    }

    return $max_size;
  }

  public static function getBoolValueDisplay(bool $value): string
  {
    if($value)
    {
      return "<i class='fa fa-check text-success'></i>";
    }
    else
    {
      return "<i class='fa fa-ban text-danger'></i>";
    }
  }
}

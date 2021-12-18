<?php

namespace App\Helpers\System;

use App\Http\Controllers\Controller;
use App\Models\System\MrLog;
use Illuminate\Support\Facades\Session;

class MrMessageHelper extends Controller
{
  const KIND_ERROR = 1;
  const KIND_WARNING = 2;
  const KIND_SUCCESS = 3;

  protected static array $kind_list = array(
    self::KIND_ERROR   => 'danger',
    self::KIND_WARNING => 'warning',
    self::KIND_SUCCESS => 'success',
  );

  /**
   * Set message
   *
   * @param int $kind
   * @param string $message
   */
  public static function SetMessage(int $kind, string $message): void
  {
    $name = 'alert-' . self::$kind_list[$kind];

    Session::flash($name, $message);

    MrLog::Add($kind, MrLog::TITLE_MSG, $message);
  }

  public static function SetError(string $message): void
  {
    self::SetMessage(self::KIND_ERROR, $message);
  }

  /**
   * Display message
   *
   * @return string
   */
  public static function GetMessage(): string
  {
    $out = '';
    foreach (self::$kind_list as $kind)
    {
      $key = 'alert-' . $kind;
      if ($message = session($key))
      {
        $out .= '<div class="alert ' . $key . '" role="alert">';
        $out .= '<span class="badge badge-pill ' . $key . '">' . '</span> ';
        $out .= $message . "</div>";
      }
    }

    return $out;
  }
}
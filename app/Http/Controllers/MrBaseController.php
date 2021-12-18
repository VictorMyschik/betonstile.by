<?php

namespace App\Http\Controllers;

use App\Models\MrFaq;
use App\Models\MrTexts;
use Exception;
use PHPMailer\PHPMailer\PHPMailer;

class MrBaseController extends Controller
{
  // Home page
  public function index()
  {
    $out = [
      'cost'       => MrTexts::loadBy(3),
      'ohvat'      => MrTexts::loadBy(2),
      'about'      => MrTexts::loadBy(4),
      'technology' => MrTexts::loadBy(1),
    ];

    return View('welcome')->with($out);
  }

  public function faqPage()
  {
    $out = ['list' => MrFaq::all()];

    return View('faq')->with($out);
  }

  public function contactPage()
  {
    $out = ['status' => ''];

    if(session('status'))
      $out['status'] = 'Ваше сообщение отправлено';

    return View('contact')->with($out);
  }

  public function feedback()
  {
    $data = $this->cleaning();
    $this->outputData($data);

    return redirect('/contact')->with('status', 'true');
  }

  private function cleaning(): array
  {
    $clean = array();
    foreach($_POST as $key => $value) {
      $value = trim($value);
      $value = stripslashes($value);
      $value = strip_tags($value);
      $value = htmlspecialchars($value);
      $clean[$key] = $value;
    }

    return $clean;
  }

  private function outputData($data)
  {
    $subject = "Обратная связь";
    $message =
      <<< HTML
        <body>
        <p>Имя: $data[name]</p>
        <p>Почта: $data[email]</p>
        <p>Сообщение: $data[text]</p>
        </body>
HTML;
    $mail = new PHPMailer(true);

    try {
      $mail->isSMTP();          // Отправить через SMTP
      $mail->SMTPAuth = true;
      $mail->CharSet = 'UTF-8'; // Кодировка письма

      // Почтовой сервер, с которого будет отправляться письма
      $mail->Host = 'ssl://smtp.mail.ru';
      $mail->Port = 465;
      $mail->Username = env('MAIL_USERNAME');
      $mail->Password = env('MAIL_PASSWORD');

      $mail->setFrom(env('MAIL_FROM_ADDRESS'), 'Support'); // От кого
      $mail->addAddress('mega-ximik@mail.ru');    // Кому
      $mail->isHTML(true);                       // Отправлять как HTML
      $mail->Subject = 'Сообщение с сайта';
      $mail->Body = $message;

      $mail->send();
    } catch(Exception $e) {
    }
  }

  public function portfolioPage()
  {
    $files = scandir('foto/');

    $newList = array();
    foreach($files as $row) {
      if(is_numeric($row[0])) {
        $newList[] = $row;
      }
    }

    $out = ['files' => $newList];

    return View('portfolio')->with($out);
  }
}
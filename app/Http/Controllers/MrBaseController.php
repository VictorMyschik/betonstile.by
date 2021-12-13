<?php

namespace App\Http\Controllers;

use App\Models\MrFaq;
use App\Models\MrTexts;

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
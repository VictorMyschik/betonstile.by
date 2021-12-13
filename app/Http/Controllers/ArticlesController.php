<?php

namespace App\Http\Controllers;

class ArticlesController extends Controller
{
  private $out;

  public function __construct()
  {
    $list = [
      'classification_beton' => 'Классификация бетонной смеси',
      'ukladka_plitki'       => 'Укладка тротуарной плитки',
      'fasadnaja'            => 'Фасадная плитка',
      'pro_fundament'        => 'Про фундамент',
      'tverdenie_betona'     => 'Твердение бетона',
      'zasita_betona'        => 'Защита бетона',
      'bruschatka'           => 'Брусчатка',
    ];

    $this->out = array(
      'list' => $list,
    );
  }

  public function list()
  {
    return View('articles_all');
  }

  public function classificationBeton()
  {
    return View('articles.classification_beton')->with($this->out);
  }

  public function ukladkaPlitki()
  {
    return View('articles.ukladka_plitki')->with($this->out);
  }

  public function fasadnaja()
  {
    return View('articles.fasadnaja')->with($this->out);
  }

  public function proFundament()
  {
    return View('articles.pro_fundament')->with($this->out);
  }


  public function tverdenieBetona()
  {
    return View('articles.tverdenie_betona')->with($this->out);
  }

  public function zasitaBetona()
  {
    return View('articles.zasita_betona')->with($this->out);
  }


  public function bruschatka()
  {
    return View('articles.bruschatka')->with($this->out);
  }
}
<?php

namespace App\Http\Controllers;

use App\Models\MrPrice;
use App\Models\MrTexts;

class CatalogController extends Controller
{
  public function catalogList()
  {
    return View('catalog_list');
  }

  public function zaborPage()
  {
    // Заборы
    $files = scandir('images/zabor/');
    $newList = array();
    foreach($files as $row) {
      if(is_numeric($row[0])) {
        $newList[] = $row;
      }
    }

    // Столбы
    $dir = 'images/zabor/stolb/';
    $files_stolb = scandir($dir);
    $newListStolb = array();
    foreach($files_stolb as $row) {
      if(is_numeric($row[0])) {
        $newListStolb[] = $row;
      }
    }


    $message = MrTexts::loadBy('message_zabor', 'name');
    $messageOut = $message?->getValue();

    $out = array(
      'files'       => $newList,
      'files_stolb' => $newListStolb,
      'message'     => $messageOut,
      'price'       => MrPrice::where('Kind', MrPrice::ZABOR)->get(),
    );

    return View('catalog.catalog_zabor')->with($out);
  }

  public function malarhPage()
  {
    return View('catalog.catalog_malarh');
  }

  public function blockPage()
  {
    return View('catalog.catalog_block');
  }

  public function vorotaPage()
  {
    return View('catalog.catalog_travnica');
  }

  public function trotuarPage()
  {
    return View('catalog.catalog_trotuar');
  }

  public function oblicovkaPage()
  {
    return View('catalog.catalog_oblicovka');
  }

  public function formsPage()
  {
    return View('catalog.catalog_forms');
  }
}
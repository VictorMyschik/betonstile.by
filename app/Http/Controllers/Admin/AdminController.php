<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TableControllers\Admin\MrAdminZaborTableController;
use App\Models\MrPrice;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
  public function zaborPage()
  {
    $out = [];

    $r = new MrAdminZaborTableController();
    $out['table'] = $r->buildTable()->render();


    return View('Admin.zabor')->with($out);
  }

  public function deleteById(int $id): RedirectResponse
  {
    MrPrice::where('id', $id)->delete();

    return back();
  }
}
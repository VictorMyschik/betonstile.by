<?php

namespace App\Models\Lego\Interfaces;

use Illuminate\Http\Request;

interface MrImportInterface
{
  public static function importPrice(Request $request);
}
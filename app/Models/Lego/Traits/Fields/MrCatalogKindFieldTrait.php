<?php

namespace App\Models\Lego\Traits\Fields;

use App\Models\Catalog\MrCatalogKind;

/**
 * Типы товаров
 */
trait MrCatalogKindFieldTrait
{
  public static function getKindList(): array
  {
    $all = MrCatalogKind::all();

    $out = array();

    foreach ($all as $item)
    {
      $out[$item->id()] = $item->getName();
    }

    return $out;
  }

  public function getKind(): MrCatalogKind
  {
    return MrCatalogKind::loadBy($this->KindID);
  }

  public function setKindID(int $value): void
  {
    $this->KindID = $value;
  }
}
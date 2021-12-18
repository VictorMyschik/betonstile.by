<?php

namespace App\Models\Lego\Traits\Fields;

use App\Models\Stock\MrStock;

trait MrStockFieldTrait
{
  public function getStock(): MrStock
  {
    return MrStock::loadByOrDie($this->StockID);
  }

  public function setStockID(int $value): void
  {
    $this->StockID = $value;
  }
}
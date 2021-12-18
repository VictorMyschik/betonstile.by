<?php

namespace App\Models\Lego\Traits\Fields;

trait MrSortOrderTrait
{
  public function getSortOrder(): int
  {
    return $this->SortOrder;
  }

  public function setSortOrder(int $value = 0): void
  {
    $this->SortOrder = $value;
  }
}
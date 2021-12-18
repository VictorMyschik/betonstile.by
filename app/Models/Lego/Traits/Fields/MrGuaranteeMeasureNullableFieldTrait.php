<?php

namespace App\Models\Lego\Traits\Fields;

trait MrGuaranteeMeasureNullableFieldTrait
{
  public function getGuaranteeMeasure(): ?int
  {
    return $this->GuaranteeMeasure;
  }

  public function setGuaranteeMeasure(?int $value): void
  {
    $this->GuaranteeMeasure = $value;
  }
}
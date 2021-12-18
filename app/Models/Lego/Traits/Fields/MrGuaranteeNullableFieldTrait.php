<?php

namespace App\Models\Lego\Traits\Fields;

trait MrGuaranteeNullableFieldTrait
{
  public function getGuarantee(): ?int
  {
    return $this->Guarantee;
  }

  public function setGuarantee(?int $value): void
  {
    $this->Guarantee = $value;
  }
}
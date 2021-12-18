<?php

namespace App\Models\Lego\Traits\Fields;

trait MrLogNullableFieldTrait
{
  /**
   * Номер листа Excel-файла
   *
   * @return string|null
   */
  public function getLog(): ?string
  {
    return $this->Log;
  }

  public function setLog(?string $value): void
  {
    $this->Log = $value;
  }
}
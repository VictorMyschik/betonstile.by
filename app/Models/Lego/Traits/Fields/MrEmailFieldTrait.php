<?php

namespace App\Models\Lego\Traits\Fields;

trait MrEmailFieldTrait
{
  // Эл. почта
  public function getEmail(): string
  {
    return $this->Email;
  }

  public function setEmail(string $value): void
  {
    $this->Email = $value;
  }
}
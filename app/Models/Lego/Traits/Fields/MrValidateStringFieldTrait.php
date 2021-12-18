<?php

namespace App\Models\Lego\Traits\Fields;

use App\Exceptions\Handler;

trait MrValidateStringFieldTrait
{
  private function setOrmStringValue(string $field, ?string $value, int $length = 250): void
  {
    if(empty($value))
    {
      $this->$field = null;

      return;
    }

    $value = trim($value);

    abort_if(strlen($value) > $length, 500, Handler::CODE_9001);

    $this->$field = $value;
  }
}
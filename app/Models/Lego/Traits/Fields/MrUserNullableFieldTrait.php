<?php

namespace App\Models\Lego\Traits\Fields;

use App\Models\User;

trait MrUserNullableFieldTrait
{
  public function getUser(): ?User
  {
    return User::find($this->UserID) ?: null;
  }

  public function setUserID(?int $value):void
  {
    $this->UserID = $value;
  }
}
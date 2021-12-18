<?php

namespace App\Models\Lego\Interfaces;

use App\Models\Reference\MrCurrency;

interface MrCurrencyInterface
{
  public function getCurrencyCash(): ?MrCurrency;

  public function setCurrencyCashID(?int $value): void;

  public function getRecCurrencyCash(): ?MrCurrency;

  public function setRecCurrencyCashID(?int $value): void;

  public function getCurrency(): ?MrCurrency;

  public function setCurrencyID(?int $value): void;
}
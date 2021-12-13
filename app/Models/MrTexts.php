<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Myschik\ORM\ORM;

class MrTexts extends ORM
{
  protected $table = 'mr_texts';
  protected $fillable = array(
    'Name',
    'Value',
    //'WriteDate'
  );

  public function getName(): string
  {
    return $this->Name;
  }

  public function setName(string $value)
  {
    $this->Name = $value;
  }

  public function getValue(): ?string
  {
    return $this->Value;
  }

  public function setValue(?string $value)
  {
    $this->Value = $value;
  }

  public static function GetMessageZabor(): MrTexts
  {
    $id = DB::table(self::getTableName())->where('name', 'message_zabor')->get(['id'])->first()->id;

    return MrTexts::loadBy($id);
  }
}
<?php
/**
 * Created by PhpStorm.
 * User: Ok!
 * Date: 05.09.2018
 * Time: 10:28
 */

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MrSettings extends Model
{
  protected $table = 'mr_settings';
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

  public static function GetMessageZabor(): MrSettings
  {
    $id = DB::table(self::getTableName())->where('name', 'message_zabor')->get(['id'])->first()->id;

    return MrSettings::loadBy($id);
  }
}
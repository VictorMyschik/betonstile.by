<?php

namespace App\Http\Controllers\TableControllers\Admin;

use App\Forms\FormBase\MrForm;
use App\Helpers\System\MrLink;
use App\Http\Controllers\TableControllers\BaseTableController\BaseTableController;
use App\Models\MrPrice;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class MrAdminZaborTableController extends BaseTableController
{
  public static function GetQuery(array $filter, array $args = array()): Builder
  {
    $query = DB::table(MrPrice::getTableName())->where('Kind', MrPrice::ZABOR)->select(['id']);

    return $query;
  }

  public static function getHeader(): array
  {
    return [
      ['name' => 'ID', 'sort' => 'id'],
      ['name' => 'Наименование', 'sort' => 'Name'],
      ['name' => 'Цена', 'sort' => 'Value'],
      ['name' => 'Примечание', 'sort' => 'Description'],
      ['name' => 'Обновлено', 'sort' => 'WriteDate'],
      ['name' => 'Вкл', 'sort' => 'IsActive'],
      ['name' => '#'],
    ];
  }

  protected static function buildRow(int $id): array
  {
    $row = array();

    $price = MrPrice::loadBy($id);
    // ID
    $row[] = $price->id();
    $row[] = $price->getName();
    $row[] = $price->getValue();
    $row[] = $price->getDescription();
    $row[] = $price->getWriteDate()->getShortDateShortTime();
    $row[] = $price->IsActiveOut();
    $row[] = [
      MrForm::loadForm(
        'admin_price_form_edit',
        ['kind' => 1, 'price_id' => $price->id()],
        '',
        ['btn', 'mr-btn-success', 'fa-pen'],
        true
      ),
      MrLink::AddDangerBtn('admin_delete_by_id', ['price_id' => $price->id()], '', 'fa-trash-alt')
    ];


    return $row;
  }

}
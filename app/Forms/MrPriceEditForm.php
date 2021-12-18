<?php

namespace App\Forms;

use App\Forms\FormBase\MrFormBase;
use App\Models\MrPrice;
use Illuminate\Http\Request;

class MrPriceEditForm extends MrFormBase
{
  protected function builderForm(&$form, $args)
  {
    $file = MrPrice::loadBy($args['price_id']);
    $form['#title'] = $file?->getName();

    $form['Name'] = array(
      '#type'  => 'textfield',
      '#title' => 'Наименование',
      '#value' => $file?->getName(),
    );
    $form['Value'] = array(
      '#type'  => 'textfield',
      '#title' => 'Цена',
      '#value' => $file?->getValue(),
    );

    $form['Description'] = array(
      '#type'  => 'textarea',
      '#title' => 'Примечание',
      '#class' => ['mr-border-radius-5'],
      '#value' => $file?->getDescription(),
      '#rows'  => '3',
    );

    $form['IsActive'] = array(
      '#type'       => 'checkbox',
      '#title'      => 'Активно',
      '#value'      => true,
      '#attributes' => [$file?->isActive() ? 'checked' : ''],
    );

    return $form;
  }

  protected function validateForm()
  {
    if(empty($this->v['Name']))
      $this->errors['Name'] = 'Наименование должно быть заполнено';
  }

  public function submitForm(Request $request, int $price_id, int $kind)
  {
    $this->v = $request->all();

    $this->validateFormBase();

    $price = MrPrice::loadBy($price_id) ?: new MrPrice();
    $price->setName($this->v['Name']);
    $price->setKind($kind);
    $price->setValue(empty($this->v['Value']) ? null : $this->v['Value']);
    $price->setIsActive($this->v['IsActive'] ?? false);
    $price->setDescription($this->v['Description']);

    $price->save_mr();
  }
}
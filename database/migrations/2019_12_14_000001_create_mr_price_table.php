<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMrPriceTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('mr_price', function(Blueprint $table) {
      $table->unsignedInteger('id')->autoIncrement();
      $table->tinyInteger('Kind');
      $table->string('Name');
      $table->string('Value', 8000)->nullable();
      $table->tinyInteger('IsVisible')->default(0);
      $table->timestamp('WriteDate')->useCurrent()->useCurrentOnUpdate();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('mr_price');
  }
}

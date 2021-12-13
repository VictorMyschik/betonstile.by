<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMrTextsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('mr_texts', function(Blueprint $table) {
      $table->unsignedInteger('id')->autoIncrement();
      $table->string('Name');
      $table->string('Value', 8000)->nullable();
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
    Schema::dropIfExists('mr_texts');
  }
}

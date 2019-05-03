<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->increments('id');
            $table->text('item'); //марка  компонента  : IRF 540 , КТ 940 и тд
            $table->text('type');// тип компонента  : транзистор , дисплей и тд
            $table->integer('storage');// номер  ячейки  хранения
            $table->text('datasheet');// ссылка  на даташит
            $table->integer('count'); // количество на складе
            $table->integer('img'); //ссылка  на изображение
            $table->timestamps();
            $table->double('price', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('components');
    }
}

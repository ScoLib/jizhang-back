<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAccountBookTypesTable.
 */
class CreateAccountBookTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_book_types', function (Blueprint $table) {
            $table->engine = 'InnoDB COMMENT="账本类型"';
            $table->increments('id');
            $table->string('name', 100)->unique()->comment('类型名称');
            $table->string('icon')->default('')->comment('类型图标');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('account_book_types');
    }
}

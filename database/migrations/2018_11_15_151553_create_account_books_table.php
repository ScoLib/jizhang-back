<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAccountBooksTable.
 */
class CreateAccountBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_books', function (Blueprint $table) {
            $table->engine = 'InnoDB COMMENT="账本"';

            $table->increments('id');
            $table->string('name', 100)->comment('账本名称');
            $table->integer('account_book_type_id')->unsigned()->comment('账本类型ID');
            $table->timestamps();

            $table->foreign('account_book_type_id')
                ->references('id')
                ->on('account_book_types');
        });

        Schema::create('account_book_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->comment('用户ID');
            $table->integer('account_book_id')->unsigned()->comment('账本ID');

            $table->primary(['user_id', 'account_book_id']);
            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('account_book_id')->references('id')
                ->on('account_books')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('account_books');
    }
}

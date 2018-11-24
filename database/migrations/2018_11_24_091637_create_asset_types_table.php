<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAssetTypesTable.
 */
class CreateAssetTypesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asset_types', function(Blueprint $table) {
		    $table->engine = 'InnoDB COMMENT="资产类型表"';
            $table->increments('id');
            $table->string('name', 100)->comment('名称');
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
		Schema::drop('asset_types');
	}
}

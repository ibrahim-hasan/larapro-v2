<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAreaTable extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public $set_schema_table_trans  = 'cms_area_translations';
    public function up()
    {
        Schema::table($this->set_schema_table_trans, function (Blueprint $table) {
            $table->string('image',255)->nullable();
            $table->text('about')->nullable();
            $table->text('short_description')->nullable();
            $table->text('details')->nullable();
            $table->text('keywords')->nullable();
        });
    }
    public function down()
    {
        Schema::table($this->set_schema_table_trans, function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('about');
            $table->dropColumn('short_description');
            $table->dropColumn('details');
            $table->dropColumn('keywords');
        });
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTagsAndTagTranslationTables extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public $set_schema_table        = 'cms_tags';
    public $set_schema_table_trans  = 'cms_tag_translations';
    public function up()
    {
        Schema::table($this->set_schema_table, function (Blueprint $table) {
            $table->text('keywords')->nullable();
        });
        Schema::table($this->set_schema_table_trans, function (Blueprint $table) {
            $table->string('image',255)->nullable();
            $table->text('description')->nullable();
        });
    }
    public function down()
    {
        Schema::table($this->set_schema_table, function (Blueprint $table) {
            $table->dropColumn('keywords');
        });
        Schema::table($this->set_schema_table_trans, function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('description');
        });
    }
}
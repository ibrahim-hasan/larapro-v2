<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateContentAndContentTranslationsTable extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public $set_schema_table_trans  = 'cms_content_translations';
    public function up()
    {
        Schema::table($this->set_schema_table_trans, function (Blueprint $table) {
            $table->text('seo_description')->nullable();
            $table->text('about')->nullable();
            $table->text('keywords')->nullable();
        });
    }
    public function down()
    {
        Schema::table($this->set_schema_table_trans, function (Blueprint $table) {
            $table->dropColumn('seo_description');
            $table->dropColumn('about');
            $table->dropColumn('keywords');
        });
    }
}
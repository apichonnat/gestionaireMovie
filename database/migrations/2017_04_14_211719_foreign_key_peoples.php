<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyPeoples extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peoples', function(Blueprint $table){
            $table->integer('media_id')->unsigned()->after('birthday');
            $table->foreign('media_id')->references('id')->on('media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peoples', function(Blueprint $table){
            //le nom de la relation est formée avec le nom de la table, le nom du champs et le mot foreign
            $table->dropForeign('peoples_media_id_foreign');
            $table->dropColumn('media_id');
        });
    }
}

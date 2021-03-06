<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('jawaban_tepat_id')->nullable();
            $table->unsignedBigInteger('profil_id')->nullable();

            $table->foreign('jawaban_tepat_id')->references('id')->on('jawaban');
            $table->foreign('profil_id')->references('id')->on('profil');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            //
            $table->dropForeign(['jawaban_tepat_id', 'profil_id']);
            $table->dropColumn(['jawaban_tepat_id', 'profil_id']);
        });
    }
}

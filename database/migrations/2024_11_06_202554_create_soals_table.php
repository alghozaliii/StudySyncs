<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->id();
            $table->string('soal');
            $table->string('jawaban_1');
            $table->string('jawaban_2');
            $table->string('jawaban_3');
            $table->enum('gaya_belajar_1', ['Kinestetik', 'Visual', 'Auditori']);
            $table->enum('gaya_belajar_2', ['Kinestetik', 'Visual', 'Auditori']);
            $table->enum('gaya_belajar_3', ['Kinestetik', 'Visual', 'Auditori']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('soals');
    }
}
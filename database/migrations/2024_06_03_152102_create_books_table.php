<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            // $table->nvarchar('название' , макс длина)->unique (чтоб имена были уникальными (логически не стоит , ето по примеру));
            $table->string('name', 64)->unique();
            //$table->текст(//отличается от стринг количеством символов)
            $table->text('description')->nullable();

            $table->string('image', 128)->nullable();
                    //присваиваем айди жанра ('модель_название праймэри кей той таблицы , с которой связь.')
            $table->unsignedBigInteger('genre_id')->nullable();
            //указываем связи между ними
            $table->foreign('genre_id')->on('genres')->references('id')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

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
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->text('with_Title_section_1');
            $table->text('First_Title_section_1');
            $table->text('Second_Title_section_1');
            $table->text('third_Title_section_1');
            $table->text('Description_Title_section_1');
            $table->text('Title_section_2');
            $table->text('Description_Title_section_2');
            $table->text('Special_Title_1_section_2');
            $table->text('Special_text_1_section_2');
            $table->text('Special_Title_2_section_2');
            $table->text('Special_text_2_section_2');
            $table->text('Special_Title_3_section_2');
            $table->text('Special_text_3_section_2');
            $table->text('Special_Title_4_section_2');
            $table->text('Special_text_4_section_2');
            $table->text('Special_image_section_2');
            $table->text('box_1_image_section_3');
            $table->text('box_1_text_section_3');
            $table->text('box_2_image_section_3');
            $table->text('box_2_text_section_3');
            $table->text('box_3_image_section_3');
            $table->text('box_3_text_section_3');
            $table->text('box_4_image_section_3');
            $table->text('box_4_text_section_3');
            $table->text('box_5_image_section_3');
            $table->text('box_5_text_section_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home');
    }
};

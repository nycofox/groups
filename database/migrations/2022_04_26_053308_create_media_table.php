<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('path');
            $table->string('type', 3); // See notes below
            $table->string('mime_type');
            $table->boolean('spoiler')->default(false);
            $table->softDeletes();
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
        Schema::dropIfExists('media');
    }
};

/*
 * Media types:
 *
 * img = Image
 * vid = Video
 * aud = Audio
 * pdf = PDF
 *
 */

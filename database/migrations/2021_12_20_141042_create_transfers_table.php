<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->integer("category_id")->nullable();
            $table->integer("user_id")->nullable();
            $table->string("title",150);
            $table->string("keywords")->nullable();
            $table->string("description")->nullable();
            $table->string("image",75)->nullable();
            $table->text("detail")->nullable();
            $table->float('base_price')->nullable();
            $table->float('km_price')->nullable();
            $table->string('capacity')->nullable();
            $table->string("slug",100)->nullable();
            $table->string("status",5)->nullable()->default("False");
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
        Schema::dropIfExists('transfers');
    }
}

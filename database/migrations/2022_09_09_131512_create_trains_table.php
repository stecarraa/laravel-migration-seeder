<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("company",30);
            $table->string("where_from",50);
            $table->string("where_for",50);
            $table->date("departure")->default(date("Y-m-d H:i:s"));
            $table->date("arrival")->default(date("Y-m-d H:i:s"));
            $table->tinyInteger("train_code");
            $table->tinyInteger("carriage_number");
            $table->boolean("isTrainLate")->default(false);
            $table->boolean("isTrainDeleted")->default(false);
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
        Schema::dropIfExists('trains');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinantialWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finantial_wallets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('value');
            $table->bigInteger('desc');
            $table->timestamps();
        });

        Schema::create('finantial_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('parent_id');
            $table->foreign('parent_id')
                  ->references('id')
                  ->on('finantial_categories')
                  ->onDelete('cascade');
        });

        Schema::create('finantial_budgets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('finantial_categories')
                  ->onDelete('cascade');
            $table->string('goal_value');
            $table->string('frecuency');
            $table->string('purpose');
            $table->timestamps();
        });

        Schema::create('finantial_incomes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('wallet_id');
            $table->foreign('wallet_id')
                  ->references('id')
                  ->on('finantial_wallets')
                  ->onDelete('cascade');
            $table->bigInteger('value');
            $table->bigInteger('category_id');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('finantial_categories')
                  ->onDelete('cascade');
            $table->string('purpose');
            $table->string('sources');
            $table->datetime('datetime_trx');
            $table->string('attachment');
            $table->timestamps();
        });

        Schema::create('finantial_expences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('wallet_id');
            $table->foreign('wallet_id')
                  ->references('id')
                  ->on('finantial_wallets')
                  ->onDelete('cascade');
            $table->bigInteger('value');
            $table->bigInteger('category_id');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('finantial_categories')
                  ->onDelete('cascade');
            $table->string('purpose');
            $table->string('receiver');
            $table->datetime('datetime_trx');
            $table->string('attachment');
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
        Schema::dropIfExists('finantial_wallets');
        Schema::dropIfExists('finantial_categories');
        Schema::dropIfExists('finantial_budgets');
        Schema::dropIfExists('finantial_incomes');
        Schema::dropIfExists('finantial_expences');
    }
}

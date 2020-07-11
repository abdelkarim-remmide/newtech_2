<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('set null');
            $table->string('billing_email')->nullable();
            $table->string('billing_nom')->nullable();
            $table->string('billing_prenom')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_pay')->nullable();
            $table->string('billing_wilaya')->nullable();
            $table->string('billing_code_postal')->nullable();
            $table->string('billing_tel')->nullable();
            $table->integer('billing_subtotal');
            $table->integer('billing_total');
            $table->dateTime('transation_date', 0);
            $table->string('transation_code')->nullable();
            $table->string('payment_gateway')->default('satim');
            $table->boolean('shipped')->default(false);
            $table->string('error')->nullable();
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
        Schema::dropIfExists('orders');
    }
}

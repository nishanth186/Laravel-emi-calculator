<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('clientid');
            $table->unsignedInteger('num_of_payment');
            $table->date('first_payment_date');
            $table->date('last_payment_date');
            $table->decimal('loan_amount', 10, 2);
            $table->timestamps();
            $table->softDeletes(); // This will add `deleted_at` column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_details');
    }
}

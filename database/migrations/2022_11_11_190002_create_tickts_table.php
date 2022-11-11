<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('nationality', 100);
            $table->string('country', 100);
            $table->string('phone',255);
            $table->string('email',255);
            $table->date('date_of_arrival');
            $table->date('departure_date');
            $table->enum('booking_type',['Complete tour program','Hotel tourism program only',
            'Transportation and tourism program Tours only']);
            $table->string('number_of_adults',100);
            $table->string('number_of_children',100);
            $table->text('other_details');
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
        Schema::dropIfExists('tickts');
    }
};

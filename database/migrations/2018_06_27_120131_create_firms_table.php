<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('companyname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->nullable();
            $table->string('street')->nullable();
            $table->string('house_number')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('place')->nullable();
            $table->string('companymail')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('mobile')->nullable();
            $table->string('web')->nullable();
            $table->string('country')->default('Österreich');
            $table->string('region')->nullable();
            $table->string('social_security')->nullable();
            $table->string('ss_number')->nullable();
            $table->string('premium_account')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('uid_taxnumber')->nullable();
            $table->string('region_finance_office')->nullable();
            $table->string('finance_office')->nullable();
            $table->string('business_line')->nullable();
            $table->string('sub_businessline')->nullable();
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('firms');
    }
}

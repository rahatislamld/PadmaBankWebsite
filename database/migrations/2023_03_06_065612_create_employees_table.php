<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Unique;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_name');
            $table->string('designation');
            $table->string('brance');
            $table->string('department');
            $table->string('functional_designation');
            $table->string('gender');
            $table->string('dob');
            $table->integer('phone');
            $table->integer('pabx_phone');
            $table->string('email')->unique();
            $table->integer('office_phone');
            $table->integer('ip_phone');
            $table->string('password'); 
            $table->string('profile_image');
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
        Schema::dropIfExists('employees');
    }
}

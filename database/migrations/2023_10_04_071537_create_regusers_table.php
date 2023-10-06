<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegusersTable extends Migration
{
    public function up()
    {
        Schema::create('regusers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
         
            $table->date('date_of_birth');
            $table->string('nic_passport');
            $table->string('contact_number');
            $table->boolean('yes_no')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('regusers');
    }
}

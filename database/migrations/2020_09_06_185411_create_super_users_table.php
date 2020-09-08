<?php

use App\Helpers\DatabaseFieldNames as Fields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superusers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(Fields::USER_ROLE_ID)->unsigned();
            $table->string(Fields::LOGIN);
            $table->string(Fields::EMAIL)->unique();
            $table->timestamp(Fields::EMAIL_VERIFY)->nullable();
            $table->string(Fields::PASSWORD)->nullable();
            $table->string(Fields::FIRST_NAME)->nullable();
            $table->string(Fields::LAST_NAME)->nullable();
            $table->date(Fields::BIRTHDAY)->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign(Fields::USER_ROLE_ID)->references('id')->on('superusers_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('superusers');
    }
}

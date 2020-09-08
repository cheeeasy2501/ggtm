<?php
use App\Helpers\DatabaseFieldNames as Fields;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superusers_roles', function (Blueprint $table) {
            $table->id();
            $table->string(Fields::LOGIN);
            $table->string(Fields::PERMISSIONS);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('superusers_roles');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->bigInteger('permission_id')->unsigned();
            $table->foreign('permission_id')->references('id')->on('permissions');
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('permission_users');
    }
}

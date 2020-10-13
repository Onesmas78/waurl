<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWagroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wagroups', function (Blueprint $table) {
            $table->bigIncrements('group_id');
            $table->timestamps();
            $table->string('group_name')->unique();
            $table->string('group_members');
            $table->string('group_members_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wagroups');
    }
}

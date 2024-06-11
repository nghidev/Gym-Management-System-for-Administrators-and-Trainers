<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToExercisesTable extends Migration
{
    public function up()
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('image')->nullable();
        });
    }

    public function down()
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToMuscleGroupsTable extends Migration
{
    public function up()
    {
        Schema::table('muscle_groups', function (Blueprint $table) {
            // Thêm cột 'description' với kiểu dữ liệu text
            $table->text('description')->nullable()->after('name');
        });
    }

    public function down()
    {
        Schema::table('muscle_groups', function (Blueprint $table) {
            // Khi rollback, xóa cột 'description'
            $table->dropColumn('description');
        });
    }
}

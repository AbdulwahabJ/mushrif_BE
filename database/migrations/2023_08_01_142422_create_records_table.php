<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->String('submit_datetime');
            $table->String('batch_name');
            $table->enum('order_status',['sent','notsent']);
            $table->integer('fieldsupervisor_id');
            $table->integer('techsupervisor_id');
            $table->String('cmap_label');
            $table->integer('office_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};

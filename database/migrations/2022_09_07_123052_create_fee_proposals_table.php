<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Project::class);
            $table->text('fees')->nullable();
            $table->text('scope')->nullable();
            $table->text('items_included')->nullable();
            $table->text('exclusions')->nullable();
            $table->text('rates_for_additional_work')->nullable();
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
        Schema::dropIfExists('fee_proposals');
    }
};

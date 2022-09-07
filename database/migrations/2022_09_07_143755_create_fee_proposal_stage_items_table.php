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
        Schema::create('fee_proposal_stage_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\FeeProposalStage::class);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price');
            $table->date('completed_on')->nullable();
            $table->date('paid_on')->nullable();
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
        Schema::dropIfExists('fee_proposal_stage_items');
    }
};

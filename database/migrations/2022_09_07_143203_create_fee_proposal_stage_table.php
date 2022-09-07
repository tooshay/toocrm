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
        Schema::create('fee_proposal_stages', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('stage')->default(0);
            $table->string('stage_name')->default(0);
            $table->foreignIdFor(\App\Models\FeeProposal::class);
            $table->boolean('included')->default(true);
            $table->date('expected_completion_date')->nullable();
            $table->date('completed_on')->nullable();
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
        Schema::dropIfExists('fee_proposal_stages');
    }
};

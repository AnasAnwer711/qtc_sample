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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_email');
            $table->integer('client_type');
            $table->date('date_of_birth')->nullable();
            $table->string('company_registration_number')->nullable();
            $table->string('contact_name');
            $table->string('contact_email');
            $table->integer('is_supplier')->default(0);
            $table->integer('is_seller')->default(0);
            $table->integer('reference_client_id')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'contacts', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name' )->nullable();
            $table->string( 'email' )->nullable();
            $table->string( 'subject' )->nullable();
            $table->string( 'budget' )->nullable();
            $table->string( 'message' )->nullable();
            $table->timestamp( 'created_at' )->useCurrent();
            $table->timestamp( 'updated_at' )->useCurrent()->useCurrentOnUpdate();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'contacts' );
    }
};

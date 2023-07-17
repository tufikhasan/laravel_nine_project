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
        Schema::create( 'footers', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'number' )->nullable();
            $table->text( 'short_description' )->nullable();
            $table->string( 'country' )->nullable();
            $table->string( 'address' )->nullable();
            $table->string( 'email' )->nullable();
            $table->string( 'social_title' )->nullable();
            $table->text( 'social_description' )->nullable();
            $table->string( 'facebook' )->nullable();
            $table->string( 'twitter' )->nullable();
            $table->string( 'linkedIn' )->nullable();
            $table->string( 'copyright' )->nullable();
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
        Schema::dropIfExists( 'footers' );
    }
};
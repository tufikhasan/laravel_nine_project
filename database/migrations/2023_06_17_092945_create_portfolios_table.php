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
        Schema::create( 'portfolios', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'portfolio_name' )->nullable();
            $table->string( 'portfolio_title' )->nullable();
            $table->text( 'portfolio_description' )->nullable();
            $table->string( 'portfolio_image' )->nullable();
            $table->string( 'portfolio_link' )->nullable();
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
        Schema::dropIfExists( 'portfolios' );
    }
};

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
        Schema::create('app_usuarios_popup', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_popup')->default(1)->index('fk_usuarios_popup_id_popup_idx');
            $table->string('guid_usuario', 65)->index('idx_usuarios_popup_guid_usuario');
            $table->integer('id_empresa')->index('idx_usuarios_popup_id_empresa');
            $table->integer('nu_views')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_usuarios_popup');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokBarangsTable extends Migration {

  public function up() {
    Schema::create('stok_barangs', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_supplier')->unsigned();
      $table->integer('id_jenis')->unsigned();
      $table->integer('id_merk')->unsigned();
      $table->string('name');
      $table->string('quantity');
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->foreign('id_supplier')->references('id')->on('data_suppliers')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_jenis')->references('id')->on('jenis_barangs')->onDelete('restrict')->onUpdate('restrict');
      $table->foreign('id_merk')->references('id')->on('merk_barangs')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('stok_barangs');
  }

}

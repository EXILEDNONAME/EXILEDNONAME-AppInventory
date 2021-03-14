<?php

use App\Models\Backend\Main\DataSupplier;
use App\Models\Backend\Main\JenisBarang;
use App\Models\Backend\Main\MerkBarang;

function data_suppliers() {
  $items = DataSupplier::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function jenis_barangs() {
  $items = JenisBarang::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

function merk_barangs() {
  $items = MerkBarang::orderBy('name','asc')->pluck('name', 'id')->toArray();
  return $items;
}

<?php

namespace App\Models\Backend\Main;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

use App\Models\Backend\Main\DataSupplier;
use App\Models\Backend\Main\JenisBarang;
use App\Models\Backend\Main\MerkBarang;

class StokBarang extends Model {

  use LogsActivity;

  protected $table = 'stok_barangs';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function data_suppliers(){
    return $this->belongsTo(DataSupplier::class, 'id_supplier');
  }

  public function jenis_barangs(){
    return $this->belongsTo(JenisBarang::class, 'id_jenis');
  }

  public function merk_barangs(){
    return $this->belongsTo(MerkBarang::class, 'id_merk');
  }

}

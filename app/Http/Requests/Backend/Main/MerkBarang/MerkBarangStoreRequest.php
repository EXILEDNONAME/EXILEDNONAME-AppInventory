<?php

namespace App\Http\Requests\Backend\Main\MerkBarang;

use Illuminate\Foundation\Http\FormRequest;

class MerkBarangStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}

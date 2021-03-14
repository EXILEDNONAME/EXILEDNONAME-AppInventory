<?php

namespace App\Http\Requests\Backend\Main\JenisBarang;

use Illuminate\Foundation\Http\FormRequest;

class JenisBarangStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}

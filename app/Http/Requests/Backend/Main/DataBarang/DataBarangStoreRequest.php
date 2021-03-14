<?php

namespace App\Http\Requests\Backend\Main\DataBarang;

use Illuminate\Foundation\Http\FormRequest;

class DataBarangStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}

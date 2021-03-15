<?php

namespace App\Http\Requests\Backend\Main\StokBarang;

use Illuminate\Foundation\Http\FormRequest;

class StokBarangStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}

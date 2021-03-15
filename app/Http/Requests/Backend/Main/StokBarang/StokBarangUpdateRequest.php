<?php

namespace App\Http\Requests\Backend\Main\StokBarang;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StokBarangUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}

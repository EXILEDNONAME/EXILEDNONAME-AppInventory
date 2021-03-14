<?php

namespace App\Http\Requests\Backend\Main\DataBarang;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DataBarangUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}

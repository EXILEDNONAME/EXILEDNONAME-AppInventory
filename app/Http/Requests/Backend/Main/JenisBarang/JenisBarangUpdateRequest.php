<?php

namespace App\Http\Requests\Backend\Main\JenisBarang;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JenisBarangUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}

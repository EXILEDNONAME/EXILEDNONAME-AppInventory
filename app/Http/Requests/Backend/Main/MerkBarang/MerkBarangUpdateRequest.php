<?php

namespace App\Http\Requests\Backend\Main\MerkBarang;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MerkBarangUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}

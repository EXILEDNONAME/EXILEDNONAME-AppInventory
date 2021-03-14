<?php

namespace App\Http\Requests\Backend\Main\DataSupplier;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DataSupplierUpdateRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      //
    ];
  }
}

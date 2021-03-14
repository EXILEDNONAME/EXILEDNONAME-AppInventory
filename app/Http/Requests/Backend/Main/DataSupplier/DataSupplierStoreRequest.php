<?php

namespace App\Http\Requests\Backend\Main\DataSupplier;

use Illuminate\Foundation\Http\FormRequest;

class DataSupplierStoreRequest extends FormRequest {

  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      // 
    ];
  }
}

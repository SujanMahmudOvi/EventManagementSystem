<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SponsorRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }
  public function rules()
  {
    return [
          'title' => 'required',
        "pic" => "mimes:jpg,jpeg,gif,png|max:1000",
      ];
  }
}

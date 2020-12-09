<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Edit extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code'=> ['required'],
            'name' => ['required'],
            'phone'=> ['required'],
            'email' => ['email'],
            'address' => ['required','max:30'],
            'admin' => ['required','max:30'],
            'status'=>['required']
        ];
    }

    public function messages()
    {
        return [
            'code.required'=>'Vui lòng điền mã cửa hàng',
            'name.required'=>'Vui lòng điền tên cửa hàng',
            'phone.required'=>'Vui lòng điền số điện thoại',
            'email.email'=>'Vui lòng nhập email hợp lệ',
            'address.required'=>'Vui lòng nhập địa chỉ',
            'address.max'=>'Địa chỉ quá dài',
            'admin.required'=>'Vui lòng nhập tên chủ cửa hàng',
            'admin.max'=>'Tên chủ cửa hàng quá dài',
            'status.required'=>'Vui lòng chọn trạng thái hoạt động'
        ];
    }
}

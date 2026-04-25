<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|alpha_num:ascii|max:25',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ];
    }

    public function messages(): array {
        return [
            'name.required' => 'nama akun wajib di isi',
            'name.alpha_num' => 'nama hanya boleh huruf dan angka',
            'name.max' => 'nama tidak boleh panjang lebih dari 25 karakter',
            'email.required' => 'email wajib di isi',
            'email.email' => 'format email salah',
            'password.required' => 'password wajib di isi',
            'password.min' => 'password minimal 8 karakter',
        ];
    }
}

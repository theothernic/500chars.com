<?php
    namespace App\Requests\Account;

    use Illuminate\Foundation\Http\FormRequest;

    class UpdateAccountRequest extends FormRequest
    {
        public function authorize(): bool
        {
            return true;
        }

        public function rules(): array
        {
            return [];
        }


    }

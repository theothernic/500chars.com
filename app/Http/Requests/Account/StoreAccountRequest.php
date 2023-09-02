<?php
    namespace App\Requests\Account;

    class StoreAccountRequest extends FormRequest
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

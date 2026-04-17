<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactSubmissionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email:rfc,dns', 'max:180'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['nullable', 'string', 'max:160'],
            'message' => ['required', 'string', 'min:15', 'max:5000'],
            'agree_privacy' => ['accepted'],
            'agree_marketing' => ['nullable', 'accepted'],
        ];
    }

    /**
     * Customize validation messages for better UX.
     */
    public function messages(): array
    {
        return [
            'agree_privacy.accepted' => 'Please agree to the privacy policy before sending your message.',
            'message.min' => 'Please provide a little more detail so we can help you better.',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
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
            'comment' => [
                'required',
                function ($attribute, $value, $fail) {
                    $badWords = ['cặc', 'buồi', 'dái', 'cac','căc','buoi','buôi','dai','lon','lồn','lôn','địt','dit','mẹ','me','chó','cho','cứt','cut','súc','suc','vật','vat','vât','cmm','vcl','dcm','dmm','bướm','lmm','chem chép','ngu','óc','nguu']; // Danh sách từ cấm
                    foreach ($badWords as $word) {
                        if (stripos($value, $word) !== false) {
                            $fail($this->messages()['comment.profanity']);
                        }
                    }
                }
            ],
            'rating' => [
                'required',
                'in:1,2,3,4,5',
            ],
        ];
    }
    public function messages()
    {
        return [
            'comment.profanity' => 'Xin lỗi vì trải nghiệm không tốt của bạn, vui lòng đánh giá thật văn minh!',
            'comment.required' => 'đánh giá không được để trống',
            'rating.required' => 'Hãy chọn số sao',
            'rating.in' => 'số sao không hợp lệ',
        ];
    }
}

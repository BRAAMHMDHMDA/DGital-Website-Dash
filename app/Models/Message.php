<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable=['name', 'email', 'subject', 'message', 'status'];

    public static function rules()
    {
        return [
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'subject' => 'required|string|min:3',
            'message' => 'required|string|min:3',
            'status' => 'nullable',
        ];
    }

}

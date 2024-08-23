<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'progress'
    ];

    public static function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'progress' => 'required|numeric|min:0|max:100',
        ];
    }
}

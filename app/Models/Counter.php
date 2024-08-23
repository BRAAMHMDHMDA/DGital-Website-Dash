<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;
    protected $fillable=['name', 'count', 'icon'];

    public static function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'count' => 'required|integer|min:0',
            'icon' => 'required|string'
        ];
    }

}

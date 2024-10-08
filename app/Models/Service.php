<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=['name', 'description', 'icon'];

    public static function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'description' => 'nullable|string',
            'icon' => 'required|string'
        ];
    }

}

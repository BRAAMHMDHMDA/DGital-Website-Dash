<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public static function rules()
    {
        return [
            'name' => 'required|string|min:2',
        ];
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}

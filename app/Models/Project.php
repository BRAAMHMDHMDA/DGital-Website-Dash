<?php

namespace App\Models;

use App\Traits\GetImageUrl;
use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, GetImageUrl, HasImage;
    public static string $imageDisk = 'media';
    public static string $imageFolder = '/projects';

    protected $fillable = [
        'name',
        'image_path',
        'description',
        'category_id',
        'link',
    ];

    public static function rules()
    {
        return [
            'name' => 'required|string|min:2',
            'image' => 'nullable|image',
            'description' => 'required|string|min:2',
            'category_id' => 'required|exists:categories,id',
            'link' => 'required|string|min:2',
        ];
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait HasImage
{

    public static function storeImage($data, $name_image_in_request='image', $name_image_in_DB='image_path')
    {
            $image = $data[$name_image_in_request];
            if ($image){
                $image_path = $image->store(static::$imageFolder, static::$imageDisk);
                $data[$name_image_in_DB] = $image_path;
            }
            return $data;
    }

    public static function updateImage($data, $oldImage, $name_image_in_request='image', $name_image_in_DB='image_path')
    {
        $result = static::storeImage($data, $name_image_in_request, $name_image_in_DB);
        static::deleteImage($oldImage);
        return $result;
    }

    public static function deleteImage($image_url)
    {
        // Extract the path from the URL
        $path = parse_url($image_url, PHP_URL_PATH);
        // Remove leading slashes
        $diskPath = ltrim($path, "/storage/".static::$imageDisk."/");
        // Delete the file if it exists
        if (Storage::disk(static::$imageDisk)->exists($diskPath)) {
            return Storage::disk(static::$imageDisk)->delete($diskPath);
        } else {
            return false;
        }
    }
}

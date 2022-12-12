<?php

namespace App\Repositories;

use App\Interfaces\ImageInterfaces\ImageRepositoryInterface;
use App\Models\Image;
use DataTables;

class ImageRepository implements ImageRepositoryInterface{

    public function getAllImagesByAlbumId($album_id){
        return Image::where('album_id',$album_id)->get();
    }

    public function deleteImage($image_id){
        return Image::destroy($image_id);
    }

    public function updateImage($image_id,array $new_details){
        return Image::whereId($image_id)->update($new_details);
    }

    public function createImage(array $image_details){
        return Image::create($image_details);
    }

}
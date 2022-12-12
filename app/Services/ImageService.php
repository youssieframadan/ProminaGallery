<?php

namespace App\Services;

use App\Interfaces\ImageInterfaces\ImageServiceInterface;
use App\Interfaces\ImageInterfaces\ImageRepositoryInterface;

class ImageService implements ImageServiceInterface{

    protected $repository;

    public function __construct(ImageRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function GetImages($album_id){
        return $this->repository->getAllImagesByAlbumId($album_id);
    }

    public function DeleteImage($image_id){
        return $this->repository->deleteImage($image_id);
    }

    public function AddNewImage(array $image_details){
        $image_details['url'] = $image_details['file']->store('image');
        return $this->repository->createImage($image_details);
    }

    public function UpdateImage(array $new_details){
        $image_id = $new_details['id'];
        $data = collect($new_details)->except(['id'])->toArray();
        return $this->repository->updateImage($image_id,$data);
    }
}
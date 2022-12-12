<?php

namespace App\Interfaces\ImageInterfaces;

interface ImageRepositoryInterface 
{
    public function getAllImagesByAlbumId($AlbumId);
    public function deleteImage($ImageId);
    public function updateImage($ImageId,array $new_details);
    public function createImage(array $details);
}
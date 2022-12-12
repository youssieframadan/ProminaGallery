<?php

namespace App\Interfaces\ImageInterfaces;

interface ImageServiceInterface 
{
    public function GetImages($album_id);
    public function DeleteImage($image_id);
    public function AddNewImage(array $image_details);
    public function UpdateImage(array $new_details);
}
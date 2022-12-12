<?php

namespace App\Http\Controllers;

use App\Interfaces\ImageInterfaces\ImageServiceInterface;
use App\Http\Requests\ImageUpdateRequest;
use App\Http\Requests\ImageCreateRequest;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    private ImageServiceInterface $ImageService;

    public function __construct(ImageServiceInterface $ImageService) 
    {
        $this->ImageService = $ImageService;
    }

    public function Show($album_id){
        return  $this->ImageService->GetImages($album_id);
    }

    public function Delete($image_id){
        return $this->ImageService->DeleteImage($image_id);
    }

    public function Update(ImageUpdateRequest $request){
        return $this->ImageService->UpdateImage($request->validated());
    }

    public function Store(ImageCreateRequest $request){
        return $this->ImageService->AddNewImage($request->validated());
    }

}

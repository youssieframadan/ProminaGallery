<?php

namespace App\Services;

use App\Interfaces\AlbumInterfaces\AlbumServiceInterface;
use App\Interfaces\AlbumInterfaces\AlbumRepositoryInterface;

class AlbumService implements AlbumServiceInterface{

    protected $repository;

    public function __construct(AlbumRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function GetAlbumsDataTable(){
        return $this->repository->getAllAlbums();
    }

    public function ShowAlbum($album_id){
        return $this->repository->getAlbumById($album_id);
    }

    public function DeleteAlbum(array $details){
        if($details['delete_album_with_images']){
            return $this->repository->deleteAlbumWithImages($details['album_id']);
        }
        return $this->repository->deleteAlbumTransferImages($details['album_id'],$details['transfer_to']);
    }

    public function CreateNewAlbum(array $album_details){
        return $this->repository->createAlbum($album_details);
    }

    public function UpdateAlbum($album_id, array $newDetails){
        return $this->repository->updateAlbum($album_id,$newDetails);
    }
}
<?php

namespace App\Interfaces\AlbumInterfaces;

interface AlbumRepositoryInterface 
{
    public function getAllAlbums();
    public function getAlbumById($album_id);
    public function deleteAlbumWithImages($album_id);
    public function deleteAlbumTransferImages($album_id,$transfer_to);
    public function createAlbum(array $album_details);
    public function updateAlbum($album_id, array $new_details);
}
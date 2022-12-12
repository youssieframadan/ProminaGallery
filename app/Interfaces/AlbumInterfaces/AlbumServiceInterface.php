<?php

namespace App\Interfaces\AlbumInterfaces;

interface AlbumServiceInterface 
{
    public function GetAlbumsDataTable();
    public function ShowAlbum($album_id);
    public function DeleteAlbum(array $details);
    public function CreateNewAlbum(array $album_details);
    public function UpdateAlbum($album_id, array $newDetails);
}
<?php

namespace App\Http\Controllers;

use App\Interfaces\AlbumInterfaces\AlbumServiceInterface;
use App\Http\Requests\AlbumStoreRequest;
use App\Http\Requests\AlbumDeleteRequest;
use App\Http\Requests\AlbumUpdateRequest;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    private AlbumServiceInterface $AlbumService;

    public function __construct(AlbumServiceInterface $AlbumService) 
    {
        $this->AlbumService = $AlbumService;
    }

    public function Show($album_id){
        return $this->AlbumService->ShowAlbum($album_id);
    }
    public function getAlbumsDataTable(Request $request){
        return $this->AlbumService->GetAlbumsDataTable();
    }

    public function Delete(AlbumDeleteRequest $request){

        $validated = $request->validated();
        return $this->AlbumService->DeleteAlbum($validated);
    }

    public function Store(AlbumStoreRequest $request){
        $validated = $request->validated();
        $data = $this->AlbumService->CreateNewAlbum($validated);
        return $data;
    }
    public function Update(AlbumUpdateRequest $request){
        $validated = $request->except('album_id');
        $album_id = $request->only('album_id');
        $data = $this->AlbumService->UpdateAlbum($album_id,$validated);
        return $data;
    }
}

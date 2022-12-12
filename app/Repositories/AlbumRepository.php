<?php

namespace App\Repositories;

use App\Interfaces\AlbumInterfaces\AlbumRepositoryInterface;
use App\Models\Album;
use App\Models\Image;
use DataTables;

class AlbumRepository implements AlbumRepositoryInterface{

    public function getAllAlbums(){
        $data = Album::select('*');
        return Datatables::of($data)
        ->addIndexColumn()
        ->addColumn('action', function($row){

                $btn = '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
                Update
              </button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
              Delete
            </button>';

                return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function getAlbumById($album_id){
        return  Album::findOrFail($album_id);
    }

    public function deleteAlbumWithImages($album_id){
        Image::where('album_id',$album_id)->delete();
        return Album::destroy($album_id);
    }

    public function deleteAlbumTransferImages($album_id,$transfer_to){
        Image::where('album_id',$album_id)->update(['album_id' => $transfer_to]);
        return Album::destroy($album_id);
    }

    public function createAlbum(array $album_details){
        $album_details['images_counter'] = 0;
        return Album::create($album_details);
    }

    public function updateAlbum($album_id, array $new_details){
        return Album::whereId($album_id)->update($new_details);
    }

}

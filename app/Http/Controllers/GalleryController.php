<?php

namespace App\Http\Controllers;

use App\Models\Export;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{


    public function getAllPhotos()
    {
        return view('cat-grid', [
            'catsPhotosData' => Gallery::limit(4)->inRandomOrder()->get()
        ]);
    }

    public function votePhoto(Request $request)
    {

        Gallery::query()->where('id', $request->id)->increment('clicks', 1);

        return view('cat-grid', [
            'catsPhotosData' => Gallery::limit(4)->inRandomOrder()->get()
        ]);
    }

    public function getPhotoById(Request $request)
    {
        return view('view-photo', [
            'catsPhoto' => Gallery::query()->where('id', $request->id)->first()
        ]);
    }
}
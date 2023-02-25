<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

trait ResizeImage
{

    /**
     * @param Request $request
     * @return $this|false|string
     */
    
    public function resizeProcess ($file) {
        $input['imagename'] = time().'.'.$file->extension();
        $destinationPath = public_path('thumbnail');
        $img = Image::make($file->path());
        // the resized file
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
        // the original
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $input['imagename']);
    }
}

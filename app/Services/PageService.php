<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class PageService
{
    public function upload(string $title, UploadedFile $file, object $model, bool $delete = false)
    {

        if ($delete) {
            if (File::isFile(public_path('uploads/headers/' . $model->file))) {
                File::delete(public_path('uploads/headers/' . $model->file));
            }
        }

        $name = date('His').'_'.Str::slug($title).'.' . $file->getClientOriginalExtension();
        $file->storeAs('headers', $name, 'public_uploads');
        $filepath = public_path('uploads/headers/' . $name);

        Image::make($filepath)
            ->fit(
                1920,
                600
            )->save($filepath);

        $model->update(['file' => $name]);
    }
}

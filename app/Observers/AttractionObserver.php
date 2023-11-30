<?php


namespace App\Observers;

use Illuminate\Support\Facades\File;

// CMS
use App\Models\Attraction;

class AttractionObserver
{
    public function deleted(Attraction $model)
    {
        $file = public_path('uploads/attractions/' . $model->file);

        if (File::isFile($file)) {
            File::delete($file);
        }
    }
}

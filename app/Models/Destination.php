<?php

namespace App\Models;

use App\ModelsExtended\Interfaces\IHasFolderStoragePathModelInterface;
use App\ModelsExtended\Traits\HasImageUrlSavingModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Destination extends Model
{
    use HasFactory;

    protected  $table = 'destination';




    public function header_image(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => Storage::disk('s3')->url($value));
    }


}

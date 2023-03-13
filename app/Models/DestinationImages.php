<?php

namespace App\Models;

use App\ModelsExtended\Interfaces\IHasFolderStoragePathModelInterface;
use App\ModelsExtended\Traits\HasImageUrlSavingModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationImages extends Model
{

    protected  $table = 'destination_images';


}

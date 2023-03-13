<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    public function index($slug){

        $data['destination'] = Destination::where('title',$slug)->first();
        $data['destination_images'] = DestinationImages::where('destination_id',$data['destination']->id)->pluck('image')->toArray();

        $image = 'clients/1/documents/37URlWR9SBaTtcC0Jx1ry3QkyKIlnkmlCRa7hWhQ.pdf';

//        $content = Storage::disk('s3')->url('clients/1/documents/37URlWR9SBaTtcC0Jx1ry3QkyKIlnkmlCRa7hWhQ.pdf');
//

        return view('destinations.destination',$data);
    }

    public function review(){
        return view('destinations.review');
    }
}

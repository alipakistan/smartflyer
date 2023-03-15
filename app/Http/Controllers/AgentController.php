<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function agents(Request $request){

        if($request->has('search')){
            $search  = $request->get('search');
            if(!$search || $search == ''){
                $data['agents'] = false;
                $data['search'] = $search;
            }else{
                $data['agents'] = User::where('role_id',User::TravelAgent)->where('name','LIKE',"%{$search}%")->get();
                $data['search'] = $search;

            }
        }
        $data['title'] = 'Users';
        return view('agents.agents',$data);
    }

    public function agent($id){
        $data['agent'] = User::where('id',$id)->first();
        return view('agents.agent',$data);
    }
}

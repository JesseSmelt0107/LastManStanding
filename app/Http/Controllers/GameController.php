<?php

namespace App\Http\Controllers;

use App\Group;
use App\Groupeduser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    //
    public function overview($id) {

        //Haalt de huidige groep op
        $group = DB::table('groups')->where('id', $id)->first();



       //Haalt alle gebruikers op met wie de group id overeenkomt
        $newarray = array();
       $test = DB::table('groupedusers')->where('group_id', $id)->get();

        dump($test);

        //zet alle gebruikers in de groep in een array

       for($i = 0; $i < count($test); $i++){
           array_push($newarray, DB::table('users')->where('id', $test[$i]->user_id)->first());
       }

        //returned de group, gebruikers, en groupedusers(voor statistieken en settings)
        dump($newarray);
        return view('game', ['group' => $group, 'member' => $newarray, 'gu' => $test]);
    }
}

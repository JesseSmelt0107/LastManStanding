<?php

namespace App\Http\Controllers;

use App\Group;
use App\GroupedUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Vind alle groeperingen waar de gebruiker id in voor komt
        //Daarna vind het alle groepen waar de gebruiker inzit met gebruik van groupeduser
        //returned de groups waar de gebruiker in zit naar de view

        $user = User::find(1)->groupedusers()->where('user_id', Auth::User()->id)->get();
        dump($user);
        $newarray = array();
        for ($i = 0; $i < count($user); $i++){
           array_push($newarray, DB::table('groups')->where('id', $user[$i]->group_id)->first());
        }




        dump($newarray);
        return view('group', ['groups' => $newarray]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //



        return view('newgroup');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Maakt een nieuwe groep aan
        //neemt de huidige gebruiker en zet die meteen in de groep met de juiste group id
        // maakt de gebruiker gelijk beheerder van de groep
        //slaat het groep/gebruikerspaar op in de database

        $group = new Group();


        $group->name = request('groupName');
        $group->save();

        $groupeduser = new Groupeduser();

        $groupeduser->user_id = Auth::user()->id;
        $groupeduser->group_id = 13;
        $groupeduser->isAdmin = 1;
        $groupeduser->isOut = 0;

        $groupeduser->save();
        return redirect('/group');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

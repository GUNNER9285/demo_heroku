<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Code;

class IndexController extends Controller
{
    public function getIndex(){
        return view('index');
    }

    public function postIndex(){
        return 'Method POST';
    }

    public function getCreate()
    {
        return view('create');
    }

    public function postCreate(Request $request)
    {
        $people = new People();
        $people->firstname = $request->firstname;
        $people->lastname = $request->lastname;
        $people->age = $request->age;
        $people->save();
        return 'Success';
    }

    public function getShow()
    {
        $people = People::all();
        return view('show')
            ->with('people', $people);
    }

    public function getEdit($id)
    {
        $people = People::find($id);
        return view('edit')
            ->with('people', $people);
    }

    public function postEdit(Request $request, $id)
    {
        $people = People::find($id);
        $people->firstname = $request->firstname;
        $people->lastname = $request->lastname;
        $people->age = $request->age;
        $people->save();
        return 'Success';
    }

    public function getDelete($id)
    {
        People::destroy($id);
        return redirect('/show');
    }

    public function get1T1()
    {
        $code = Code::find(1);
        $p = People::find($code['people_id']);
        return $p;

    }
}

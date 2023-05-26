<?php

namespace App\Http\Controllers;

use App\Models\userData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        userData::create([
            'fullname'=> $request->fullname
        ]);
        
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //dito i sho-show mga datas
        return view('Home' , [ 'fullname' => DB::select('select * from user_data') ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $data = DB::select('select * from user_data where id = ?', [$id]);
        return view('Edit' , ['data' => $data] );
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fullname = $request->fullname;
        DB::table('user_data')
            ->where('id', $request->id)
            ->update(['fullname' => $request->fullname]);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        userData::destroy($id);
        return redirect()->route('home')->with('message' , 'User has been deleted');
        

    }
}

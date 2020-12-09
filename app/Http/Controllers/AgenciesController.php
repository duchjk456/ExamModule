<?php

namespace App\Http\Controllers;

use App\Http\Requests\Add;
use App\Models\Agencies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $agencies=Agencies::all();
        return view('index',compact('agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(Add $request)
    {
        $agency=new Agencies();
        $agency->code=$request->code;
        $agency->name=$request->name;
        $agency->phone=$request->phone;
        $agency->address=$request->address;
        $agency->email=$request->email;
        $agency->admin=$request->admin;
        $agency->status=$request->status;
        $agency->save();
        $agencies=Agencies::all();
        return view('index',compact('agencies'));
    }


    public function formAdd()
    {
        return view('add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $agencies = DB::table('agencies')->where('name', 'Like', '%' . $request->search . '%')->get();
        return view('index',compact('agencies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agency=Agencies::findOrFail($id);
        return view('edit',compact('agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function update(Request $request, $id)
    {
        $agency=Agencies::findOrFail($id);
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function destroy($id)
    {
        $agency=Agencies::findOrFail($id);
        $agency->delete();
        return route('index');
    }
}

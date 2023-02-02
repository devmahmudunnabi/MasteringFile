<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Backend\Brace;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("backend.pages.brance.addBrance");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'br_name'=>'required',
            'br_manager'=>'required',
            'br_phone'=>'required',
            'br_email'=>'required',
            'status'=>'required',
        ],[
            'br_name.required'=>'BRANCH NAME FIELD IS REQUIRED',
            'br_manager.required'=>'Branch field is Requird',
            'br_phone.required'=>'Phone field is Requird',
            'br_email.required'=>'Email field is Requird',
            'status.required'=>'Status field is Requird',
        ]);
        $brach = new Brace;
        $brach->br_name = $request->br_name;
        $brach->br_manager = $request->br_manager;
        $brach->br_phone = $request->br_phone;
        $brach->br_email = $request->br_email;
        $brach->status = $request->status;
        if($brach->save()){
           return redirect()->route("branchshow")->with("shykat","data save");
         }
         else{
            return redirect()->back()->with("error","data NOT save");
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $find = Brace::find($id);
        if($find->status==1){
            $find->status="2";
        }
        else{
            $find->status="1";
        }
        $find->update();
        return redirect()->route("branchshow")->with("shykat","status update");
    }
    public function show()
    {
        $brace = Brace::all();
        return view("backend.pages.brance.manageBrance",compact("brace"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $branch = Brace::find($id);
       return view("backend.pages.brance.edit",compact("branch"));
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
        $brach = Brace::find($id);
        $brach->br_name = $request->br_name;
        $brach->br_manager = $request->br_manager;
        $brach->br_phone = $request->br_phone;
        $brach->br_email = $request->br_email;
        $brach->status = $request->status;
        $brach->update();
        return redirect()->route("branchshow");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brach = Brace::find($id);
        $brach->delete();
        return redirect()->route("branchshow")->with("warning","Delete Data");
    }
}

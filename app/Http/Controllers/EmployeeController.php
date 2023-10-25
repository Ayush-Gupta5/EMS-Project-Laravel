<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\department;


class EmployeeController extends Controller
{

    public function index(){
        return view('home');
    }

    public function staff(){
        $data=employee::paginate(3);
        return view('staff',compact('data'));
    }

    public function staff_add(){
        $data=department::all();
        return view('staff_add',['data'=>$data]);
    }

    public function department(){
        $data = department::all();
        return view ('department',['data'=>$data]);
    }

    public function depart_store(Request $request){

            department::insert([
                'name'=> $request->input('name'),
            ]);

            return redirect('department')->with('success', 'Insert successfully');

    }

    public function dm_edit($id){
        $record = department::find($id);
        return view('dm_edit',compact('record'));
    }

    public function dm_update(Request $request,$id){
        $record =department::find($id);

        $record->name=$request->input('name');

        $record->save();

        return redirect('/department')->with('success', 'Update successfully');

    }

    public function staff_store(Request $request){

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        employee::insert([

        'name'=>$request->input('name'),
        'department'=>$request->input('department'),
        'gender'=>$request->input('gender'),
        'email'=>$request->input('email'),
        'mobile'=>$request->input('mobile'),
        'dob'=>$request->input('dob'),
        'doj'=>$request->input('doj'),
        'address'=>$request->input('address'),
        'city'=>$request->input('city'),
        'state'=>$request->input('state'),
        'country'=>$request->input('country'),
        'image'=>$imagePath
        ]);

        return redirect('staff')->with('success','Staff insert successfully!');
    }

    public function depart_delete($id){
        $record=department::find($id);

        if($record){
            $record->delete();
            return redirect('department')->with('delete','Department delete successfully!');
        }
    }

    public function staff_delete($id){
        $record=employee::find($id);

        if($record){
            $record->delete();
            return redirect('staff')->with('delete','Staff delete successfully!');
        }
    }

    public function staff_edit(Request $request,$id){
        $record = employee::find($id);
        $data=department::all();
        return view('staff_edit',compact('record'),compact('data'));
    }


    public function staff_update(Request $request,$id){
        $record =employee::find($id);



        $record->name=$request->input('name');
        $record->department=$request->input('department');
        $record->gender=$request->input('gender');
        $record->email=$request->input('email');
        $record->mobile=$request->input('mobile');
        $record->dob=$request->input('dob');
        $record->doj=$request->input('doj');
        $record->address=$request->input('address');
        $record->city=$request->input('city');
        $record->state=$request->input('state');
        $record->country=$request->input('country');
        $record->image=$request->file('image')->store('images', 'public');


        $record->save();

        return redirect('/staff')->with('success', 'Update successfully');

    }
}

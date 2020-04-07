<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Address;
use Illuminate\Http\Request;

class employeeControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Employee::all();
        return view('employee.index',compact('all'));
        // return $all;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employee::create(['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone]);
        return redirect()->route('employee.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Employee::where('id',[$id])->first();
        $address = $data->address;
        return view('employee.show',compact('data','address'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employee::where('id',$id)->first();
        $address = Address::where('employee_id',$id)->first();
        return view('employee.edit',compact('data','address'));
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
        Employee::where('id',$id)->update(['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone]);
        Address :: where('employee_id',$id)->update(['street'=>$request->street,'city'=>$request->city]);
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::where('id',$id)->first();
        $employee->delete();
        $address = Address::where('employee_id',$id)->first();
        $address->delete();        
        return redirect()->route('employee.index');
    }
}

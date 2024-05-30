<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employeemodel;

class Employeecontroller extends Controller
{
    public function __construct(){
        $this->uniqueemployee = New employeemodel();
    }
    public function index(){
        $response['employeetable'] = $this->uniqueemployee->all();
        return view('employee-mngt.index')->with($response);
    }
    public function create(){
      
    }
    public function store(Request $request){
       $this->uniqueemployee->create($request->all());
       return redirect()->back();
    }

    public function edit(string $id)
    {
        $response['uniqueemployee'] = $this->uniqueemployee->find($id);
        return view('employee-mngt.edit')->with($response);
    }
    public function update(Request $request, string $id)
    {
        $uniqueemployee = $this->uniqueemployee->find($id);
        $uniqueemployee ->update(array_merge($uniqueemployee->toArray(), $request->toArray()));
        return redirect('uniqueemployee');
    }

    public function destroy(string $id)
    {
        $employeetable = $this->uniqueemployee->find($id);
        $employeetable->delete();
        return redirect()->back();
    }
}

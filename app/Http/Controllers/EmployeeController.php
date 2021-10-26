<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Job;
use App\Models\Pharmacist;
use App\Models\Pharmacy;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Employee $employees)
    {

        return view('pages.employees.index', ["employees" => $employees->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pharmacies = Pharmacy::all();
        $jobs = Job::all();
        return view('pages.employees.create', ["pharmacies" => $pharmacies, "jobs" => $jobs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/employees'), $imageName);
        $employee->imageUrl = $imageName;
        $employee->name = $request->input("name");
        $employee->last_name = $request->input("last_name");
        $employee->date_of_birth = $request->input("date_of_birth");
        $employee->id = $request->input("id");
        $employee->gender = $request->input("gender");
        $employee->phone_number = $request->input("phone_number");
        $employee->email = $request->input("email");
        $employee->pharmacy_id = $request->input("pharmacy_id");
        $employee->job_id = $request->input("job_id");
        $employee->save();

        if ($request->input("isPharmacist")) {
            $pharmacist = new Pharmacist();
            $pharmacist->tuition_number = $request->input("pharmacist.tuition_number");
            $pharmacist->tuition_number = $request->input("pharmacist.tuition_number");
        } else if ($request->input("isIntern")) {
        }

        return redirect()->route("employees.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('pages.employees.show', ["employee" => $employee]);
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
        Employee::destroy($id);
        return redirect()->route('employees.index')->with("success", "Empleado eliminado correctamente.");
    }
}

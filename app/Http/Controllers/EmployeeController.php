<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Intern;
use App\Models\Job;
use App\Models\LegalRepresentative;
use App\Models\Pharmacist;
use App\Models\PharmacistUniversityDegree;
use App\Models\Pharmacy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
        try {
            DB::beginTransaction();
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
            if ($request->input("isPharmacist") === "true") {
                $pharmacist = new Pharmacist();
                $pharmacist->employee_id = $employee->id;
                $pharmacist->tuition_number = $request->input("pharmacist_tuition_number");
                $pharmacist->health_number = $request->input("pharmacist_health_number");
                $pharmacist->save();
                $universityDegree = new PharmacistUniversityDegree();
                $universityDegree->pharmacist_id = $employee->id;
                $universityDegree->registry_number = $request->input("pharmacist_registry_number");
                $universityDegree->university = $request->input("pharmacist_university");
                $universityDegree->name = $request->input("pharmacist_degree_name");
                $universityDegree->date_of_graduation = $request->input("pharmacist_date_of_graduation");
                $universityDegree->save();
            } elseif ($request->input("isIntern")  === "true") {
                $intern = new Intern();
                $intern->employee_id = $employee->id;
                $intern->permission_code = uniqid();
                $intern->speciality = $request->input("intern_speciality");
                $intern->university = $request->input("intern_university");
                $intern->initial_date = $request->input("intern_initial_date");
                $intern->final_date = $request->input("intern_final_date");
                if (Carbon::createFromDate($employee->date_of_birth)->age < 18) {
                    $representative = new LegalRepresentative();
                    $representative->id = $request->input("representative_id");
                    $representative->name = $request->input("representative_name");
                    $representative->last_name = $request->input("representative_last_name");
                    $representative->save();
                    $intern->legal_representative_id = $representative->id;
                }
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            File::delete("uploads/employees/{$imageName}");
            $employee->id;
            return  redirect()->route("employees.create")->with("error", "Ha ocurrido un error");
        }

        return redirect()->route("employees.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('pages.employees.show', ["employee" => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        File::delete("uploads/employees/{$employee->imageUrl}");
        $employee->delete();
        return redirect()->route('employees.index')->with("success", "Empleado eliminado correctamente.");
    }
}

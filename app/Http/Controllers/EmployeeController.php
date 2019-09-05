<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('employees.create', [
            'employee' => new Employee()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmployeeRequest $request
     * @return void
     */
    public function store(EmployeeRequest $request)
    {
        $params = $request->validated();

        // get file name with Extension
        $imageFileNameWithExt = $request->file('image')->getClientOriginalName();

        // get file name without Extension
        $imageFileName = pathinfo($imageFileNameWithExt, PATHINFO_FILENAME);

        // get Extension
        $extension = $request->file('image')->getClientOriginalExtension();

        // create new file name
        $fileNameToStore = $imageFileName . '_' . time() . '.' . $extension;

        //upload image
        $request->file('image')->storeAs('public/images', $fileNameToStore);

        $params['image'] = $fileNameToStore;

        Employee::create($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     * @return Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EmployeeRequest $request
     * @param Employee $employee
     * @return Response
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        $params = $request->validated();

        if ($request->file('image') != null) {
            // get file name with Extension
            $imageFileNameWithExt = $request->file('image')->getClientOriginalName();

            // get file name without Extension
            $imageFileName = pathinfo($imageFileNameWithExt, PATHINFO_FILENAME);

            // get Extension
            $extension = $request->file('image')->getClientOriginalExtension();

            // create new file name
            $fileNameToStore = $imageFileName . '_' . time() . '.' . $extension;

            //upload image
            $request->file('image')->storeAs('public/images', $fileNameToStore);

            $params['image'] = $fileNameToStore;
        }

        $employee->update($params);

        return redirect()->route('admin.homePage');
    }

}

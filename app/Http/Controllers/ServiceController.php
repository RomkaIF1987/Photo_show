<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Service;
use Exception;
use Illuminate\Http\Response;

class ServiceController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('services.create', [
            'service' => new Service()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceRequest $request
     * @return void
     */
    public function store(ServiceRequest $request)
    {
        $params = $request->validated();

        Service::create($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Service $service
     * @return Response
     */
    public function edit(Service $service)
    {
        return view('services.edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceRequest $request
     * @param Service $service
     * @return Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $params = $request->validated();

        $service->update($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Service $service
     * @return Response
     * @throws Exception
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return back();
    }
}

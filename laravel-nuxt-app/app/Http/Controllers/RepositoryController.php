<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessRepositoryCreateJob;
use App\Models\Repository;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Repository::all());
    }

    public function createRepository()
    {
        ProcessRepositoryCreateJob::dispatch();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Repository $repository)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Repository $repository)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Repository $repository)
    {
        //
    }
}

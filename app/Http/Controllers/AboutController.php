<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::simplePaginate(3);
        $staffs_age = Staff::where('age','>',35)->simplePaginate(3);
        $staffs_all = staff::all();
        $staffs_avg = $staffs_all->avg('age');
        $staffs_sum = $staffs_all->sum('age');
        return view('about', compact('staffs','staffs_age','staffs_avg','staffs_sum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

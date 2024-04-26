<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = DB::table('branches')
                        ->select('branches.name')
                        ->groupBy('name')
                        ->get();
        return view('map',compact('branches'));
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

    public function db()
    {
        // $branches = DB::table('branches')->get();
        // $branches = DB::table('branches')->where('name','บางบอน')->get();
        // $branches = DB::table('branches')->find(5);
        // $branches = DB::table('branches')->pluck('name');

        // return $branches->name;
        // foreach( $branches as $value){
        // echo $value;
        // }

        // $branches = DB::table('branches')->count();
        // return $branches;

        // $staff = DB::table('staffs')->max('age');
        // return $staff;

        // $staff = DB::table('staffs')->where('name','LIKE','%สุ%')->sum('age');
        // return $staff;

        // $staff = DB::table('staffs')->select('name','age')->get();
        // return $staff[0]->name;
        // // dd($staff);

        // $staff = DB::table('staffs')
        //              ->select(DB::raw('count(*) as count_  , position'))
        //              ->groupBy('position')
        //              ->get();
        // return $staff;

        // $staffs = DB::table('staffs')
        //              ->join('branches','staffs.id','=','branches.staff_id')
        //              ->select('staffs.*','branches.name as br_name')
        //              ->get();
        // dd($staffs);

        // $staffs = DB::table('staffs')
        //               ->leftJoin('branches','staffs.id','=','branches.staff_id')
        //               ->select('staffs.*','branches.name as br_name')
        //               ->get();
        // // dd($staffs);

        // $staffs = DB::table('staffs')
        //               ->rightJoin('branches','staffs.id','=','branches.staff_id')
        //               ->select('staffs.*','branches.name as br_name')
        //               ->get();
        // dd($staffs);

        // $staffs = DB::table('staffs')->where('age','=',40)->get();
        // dd($staffs);

        // $staffs = DB::table('staffs')->where('name','LIKE','%สร%')->get();
        // dd($staffs);

        // $staffs = DB::table('staffs')
        //               ->where('name','LIKE','%สุ%')
        //               ->where('age','>', 30)
        //               ->get();
        // dd($staffs);

        // $staffs = DB::table('staffs')
        //               ->orWhere('name','LIKE','%สุ%')
        //               ->orWhere('age','>', 45)
        //               ->get();
        // dd($staffs);

        // whereBetween หรือ orWhereBetween
        // $age_from = 30;
        // $age_to = 40;
        // $staffs = DB::table('staffs')
        //               ->whereBetween('age', array($age_from, $age_to))
        //               ->get()
        // ;
        // dd($staffs);

        // $staffs = DB::table('staffs')
        //               ->whereIn('id', array(1,2))
        //               ->get()
        // ;
        // dd($staffs);

        // $staffs = DB::table('staffs')
        //               ->whereDate('created_at','2024-01-01')
        //               ->get();
        // dd($staffs);

        // $staffs = DB::table('staffs')
        //               ->whereMonth('created_at','01')
        //               ->get();
        // dd($staffs);

        // $staffs = DB::table('staffs')
        //               ->whereDay('created_at','1')
        //               ->get();
        // dd($staffs);

        // $staffs = DB::table('staffs')
        //               ->whereYear('created_at','2024')
        //               ->get();
        // dd($staffs);

        // $staffs = DB::table('staffs')
        //               ->whereTime('created_at','08:00:00')
        //               ->get();
        // dd($staffs);

        // เท่ากัน =
        // $staffs = DB::table('staffs')
        //               ->whereColumn('created_at','updated_at')
        //               ->get();
        // dd($staffs);

        // ไม่เท่ากัน !=.<,>
        // $staffs = DB::table('staffs')
        //               ->whereColumn('created_at','<','updated_at')
        //               ->get();
        // dd($staffs);
    }
}

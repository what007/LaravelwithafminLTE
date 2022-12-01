<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\Staff;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $data = Leave::all();
        //  $data = Leave::paginate(2);
        $staff = Staff::where('user_id', auth()->user()->id)->first();

    
        

        $data = Leave::with(
            [
                'staff',
                'staff.user',
            ]
        )->where('staff_id', $staff->id)->paginate(2);
        //dd($data);
        return view('backend.leave.indexLeave', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.leave.addleave');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = Staff::where('user_id', auth()->user()->id)->first();

        Leave::create(
            [
                'staff_id' => $staff->id,
                'leave_type' => $request['leave_type'],
                'start_leave' => $request['start_leave'],
                'end_leave' => $request['end_leave'],
                'leave_reason' => $request['leave_reason'],
            ]
        );
        return redirect()->route('leave.index')->with('success', 'successfully done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Leave::all($id);
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
        $data = Leave::find($id);
        // $image = $data->image;

        // $filepath = public_path('images/');
        // $imagepath = $filepath.$image;

        // //dd($old_image);
        // if (file_exists($imagepath)) {
        //     @unlink($imagepath);
        // }

        $data->delete();

        return redirect()->route('leave.index');
    }
}

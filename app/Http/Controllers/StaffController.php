<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Staff::get();
        $data = Staff::with(['user'])->paginate(3);
        // dd($data);
        // return $data = staff::select('name', 'email', 'phone', 'position', 'image')->paginate(5);
        return view('backend.staff.indexStaff', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.staff.addStaff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->image->getMimeType());

        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make('12345678'),
        ]);

        Staff::create(
            [
                'user_id' => $user->id,
                'position' => $request['position'],
                'phone' => $request['phone'],
                'image' => $image,
            ]
        );

        return redirect()->route('staff.index')->with('success', 'successfully done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Staff::find($id);
        return view('backend.staff.updateStaff', compact('data'));
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
        $data = Staff::find($id);
        // dd($request->all);

        if ($request->hasFile('image')) {
            $image = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $image);
            $data->image = $image;
        }



        //     $data->name = $request->name;
        //      $data->email = $request->email;
        $data->phone = $request->phone;
        $data->position = $request->position;

        $data->save();

        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);

        //$data = User::find($id);
        
        
        $data = User::where('id', $staff->user_id)->firstOrFail();
       // $data = User::firstOrFail($id);
        // $image = $data->image;


        // $filepath = public_path('images/');

        
        // $imagepath = $filepath . $image;

        // //dd($old_image);
        // if (file_exists($imagepath)) {
        //     @unlink($imagepath);
        // }

        $data->delete();

        return redirect()->route('staff.index');
    }
}

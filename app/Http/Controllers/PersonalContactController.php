<?php

namespace App\Http\Controllers;

use App\Models\PersonalContact;
use Illuminate\Http\Request;

class PersonalContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PersonalContact::all();
        return view('backend.personalcontact.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.personalcontact.add');
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


        PersonalContact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],

            'image' => $image,


        ]);

        return redirect()->route('personalcontact.index')->with('success', 'successfully done');
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
        $data = PersonalContact::find($id);
        return view('backend.personalcontact.update', compact('data'));
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
        $data = PersonalContact::find($id);
        // dd($request->all);

        if ($request->hasFile('image')) {
            $image = time() . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $image);
            $data->image = $image;
        }

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        $data->save();

        return redirect()->route('personalcontact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PersonalContact::find($id);
        $image = $data->image;

        $filepath = public_path('images/');
        $imagepath = $filepath.$image;

        //dd($old_image);
        if (file_exists($imagepath)) {
            @unlink($imagepath);
        }

        $data->delete();

        return redirect()->route('personalcontact.index');
    }
}

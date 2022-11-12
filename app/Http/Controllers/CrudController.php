<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('crud.crud');
    }

    public function store() {
        $data = Crud::all();
        return view('crud.store', compact("data"));
    }

    public function create(Request $request) {

        $request->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'age' => 'required',
            'hobiy' => 'required',
            'description' => 'required',
            'email' => 'required',
            'number' => 'required',
            'degree' => 'required',
            'staj' => 'required',
            'courses' => 'required',
            'address' => 'required',
            'work' => 'required',
            'message' => 'required',
            'telegramlink' => 'required',
        ]);

        Crud::create($request->all());

        return redirect()->route('home');

    }

    public function destroy($id) {
        if(Auth::user()){
        $data = Crud::find($id);
        $data->delete();

        return redirect()->back();
    } else {
        return redirect()->back();
    }
    }

    public function update(Request $request, $id) {

        $data = Crud::find($id);
        return view('crud.update', compact("data"));

    }

    public function edit(Request $request, $id) {

        $data = Crud::find($id);

        $data->lastname = $request->lastname;
        $data->firstname = $request->firstname;
        $data->age = $request->age;
        $data->hobiy = $request->hobiy;
        $data->description = $request->description;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->degree = $request->degree;
        $data->staj = $request->staj;
        $data->courses = $request->courses;
        $data->address = $request->address;
        $data->work = $request->work;
        $data->message = $request->message;
        $data->telegramlink = $request->telegramlink;

        $data->save();

        return view('home', compact("data"));

    }

    public function show($id) {

        $data = Crud::find($id);
        return view('crud.view', compact('data'));

    }

}

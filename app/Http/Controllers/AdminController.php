<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cars;

class AdminController extends Controller
{
    public function view_category()
    {

        // We are mentioning $data variable and here we are getting and storing all the data in $data variable the data from category table using 'use App\Models\Category'
       $data=category::all();

       return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data=new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function delete_category($id)
    {
        $data=category::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function view_car(Request $request)
    {
        $category=category::all();
        return view('admin.car', compact('category'));
    }

    public function add_car(Request $request)
    {
        $car=new cars;

        $car->title=$request->title;
        $car->description=$request->description;
        $car->grade=$request->grade;
        $car->model=$request->model;
        $car->milage=$request->milage;
        $car->status=$request->status;
        $car->category=$request->category;
        $car->quantity=$request->quantity;
        $car->price=$request->price;
        $car->discount_price=$request->discount_price;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('cars', $imagename);
        $car->image=$imagename;

        $car->save();

        return redirect()->back()->with('message', 'Car Added Successfully');
    }

    public function show_car(Request $request)
    {
        $car=cars::all();
        return view('admin.show_car', compact('car'));
    }

}

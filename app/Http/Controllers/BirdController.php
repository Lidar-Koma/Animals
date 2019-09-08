<?php

namespace App\Http\Controllers;
use App\Category;

use App\Bird;

use Illuminate\Http\Request;

class BirdController extends Controller
{
    public function index()
    {
        //$birds= Category::all();
        //return $birds;
        //$category = Category::with('bird')->birdsdetail->get();
        //all details
        //$category = Bird::with('birdsdetail')->get();
        //$category = Bird::with('habitat')->get();

        $category = Bird::with('category')->with('birdsdetail')->with('habitat')->get()->toArray();//To get the output in array


        //$category = Bird::with('birdsdetail')->get();
        return response()->json(($category));

    }
    public function getProjectsCategory($id) {
        //$category = Category::find($id)->Project()->get();
        //if(Category::find($id)) {
        //$category = Category::find($id)->projects()->get();
        //return response()->json($category);
        if(Bird::find($id)) {
          //  $category = Bird::find($id)::with('birdsdetail')->get();
          $category = Bird::find($id)->birdsdetail;
          //User::find(212)->profile->telephone;

          

        //$category = $category->category()->get();
    
        //$category = $category->category->name;

        //$category = Project::find([1, 1])->get();
        //$category = Category::find($id)->projects()->get()->);


        
        return ($category);
        }
        else
        return response()->json(["error" => "File doesn`t exists"], 404);
        //return("lkk");

    }
}

<?php

namespace App\Http\Controllers;
use App\Sports;
use Session;
use Storage;
use Image;

use Illuminate\Http\Request;

class SportsController extends Controller
{

    public function index()
    {
      $sports = Sports::orderBy('id','desc')->paginate(10);
      return view('sports.index')->withSports($sports);
    }
    public function create()
    {
        return view('sports.create');
    }
    public function store(Request $request)
    {
      //validate Data
      $this->validate($request, array(
        'title' => 'required|max:255',
        'description' => 'required',
        'featured_image' => 'sometimes | image'

      ));
      //store in db
      $sports = new Sports;

      $sports->title = $request->title;
      $sports->description = $request->description;
      if ($request->hasFile('featured_image')) {
        $image = $request->file('featured_image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        Image::make($image)->save($location);

        $sports->image =$filename;
      }
      $sports->save();

      Session::flash('success','The News Added Successfully!');
      //redirect to another page
      return redirect()->route('sports.show',$sports->id);
    }
    public function show($id)
    {
      $sports = Sports::find($id);
      return view('sports.show')->withSports($sports);
    }
    public function edit($id)
    {
      $sports= Sports::find($id);
      return view('sports.edit')->withSports($sports);
    }
    public function update(Request $request, $id)
    {
      //validate
      $sports = Sports::find($id);

        $this->validate($request, array(
          'title' => 'required|max:255',
          'description' => 'required',

        ));



  //save to db
  $sports = Sports::find($id);

  $sports->title = $request->input('title');
  $sports->description = $request->input('description');

  if ($request->hasFile('featured_image')) {
    $image = $request->file('featured_image');
    $filename = time().'.'.$image->getClientOriginalExtension();
    $location = public_path('images/'.$filename);
    Image::make($image)->save($location);
    $oldfilename = $sports->image;

    // updated_db
    $sports->image = $filename;

    // delete old
    Storage::delete($oldfilename);
  }
  $sports->save();

  //flash data
  Session::flash('success','The News Updated Successfully!');
  //return
  return redirect()->route('sports.show',$sports->id);
    }

    public function destroy($id)
    {
      $sports = Sports::find($id);
      Storage::delete($sports->image);
      $sports->delete();

      Session::flash('success','The Sports Was Successfully! Deleted');
      return redirect()->route('sports.index');
    }
    public function logout () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/');
    }

}

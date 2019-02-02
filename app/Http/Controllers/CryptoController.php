<?php

namespace App\Http\Controllers;
use App\Crypto;
use Session;
use Storage;
use Image;

use Illuminate\Http\Request;

class CryptoController extends Controller
{
  public function index()
  {
    $crypto = Crypto::orderBy('id','desc')->paginate(10);
    return view('crypto.index')->withCrypto($crypto);
  }
  public function create()
  {
      return view('crypto.create');
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
    $crypto = new Crypto;

    $crypto->title = $request->title;
    $crypto->description = $request->description;
    if ($request->hasFile('featured_image')) {
      $image = $request->file('featured_image');
      $filename = time().'.'.$image->getClientOriginalExtension();
      $location = public_path('images/'.$filename);
      Image::make($image)->save($location);

      $crypto->image =$filename;
    }
    $crypto->save();

    Session::flash('success','Added Successfully!');
    //redirect to another page
    return redirect()->route('crypto.show',$crypto->id);
  }
  public function show($id)
  {
    $crypto = Crypto::find($id);
    return view('crypto.show')->withcrypto($crypto);
  } function edit($id)
  {
    $crypto= Crypto::find($id);

    return view('crypto.edit')->withcrypto($crypto);
  }
  public function update(Request $request, $id)
  {
    //validate
    $crypto = Crypto::find($id);

      $this->validate($request, array(
        'title' => 'required|max:255',
        'description' => 'required',

      ));



//save to db
            $crypto = Crypto::find($id);

            $crypto->title = $request->input('title');
            $crypto->description = $request->input('description');

            if ($request->hasFile('featured_image')) {
              $image = $request->file('featured_image');
              $filename = time().'.'.$image->getClientOriginalExtension();
              $location = public_path('images/'.$filename);
              Image::make($image)->save($location);
              $oldfilename = $crypto->image;

              // updated_db
              $crypto->image = $filename;

              // delete old
              Storage::delete($oldfilename);
            }
            $crypto->save();

          //flash data
          Session::flash('success','Updated Successfully!');
          //return
          return redirect()->route('crypto.show',$crypto->id);
            }

          public function destroy($id)
          {
            $crypto = Crypto::find($id);
            Storage::delete($crypto->image);
            $crypto->delete();

            Session::flash('success','The crypto Was Successfully! Deleted');
            return redirect()->route('crypto.index');
          }
          public function logout () {
          //logout user
          auth()->logout();
          // redirect to homepage
          return redirect('/');
          }
}

<?php
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;
use App\Post;
use Session;
use Storage;
use Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create a variable and store all
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('posts.index')->withPosts($posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate Data
        $this->validate($request, array(
          'title' => 'required|max:255',
          'display' => 'required|max:255',
          'camera' => 'required|max:255',
          'ram_processor' => 'required',
          'battery' => 'required|max:255',
          'price' => 'required|numeric',
          'description' => 'required',
          'slug' => 'required | alpha_dash | min:5 |max:255 | unique:posts,slug',
          'featured_image' => 'sometimes | image'

        ));
        //store in db
        $post = new Post;

        $post->title = $request->title;
        $post->display = $request->display;
        $post->camera = $request->camera;
        $post->ram_processor = $request->ram_processor;
        $post->battery = $request->battery;
        $post->price = $request->price;
        $post->description = $request->description;
        $post->slug = $request->slug;
        if ($request->hasFile('featured_image')) {
          $image = $request->file('featured_image');
          $filename = time().'.'.$image->getClientOriginalExtension();
          $location = public_path('images/'.$filename);
          Image::make($image)->save($location);

          $post->image =$filename;
        }
        $post->save();

        Session::flash('success','The Gadjet Added Successfully!');
        //redirect to another page
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the db
        $post= Post::find($id);

        return view('posts.edit')->withPost($post);
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
          //validate
          $post = Post::find($id);

            $this->validate($request, array(
              'title' => 'required|max:255',
              'display' => 'required|max:255',
              'camera' => 'required|max:255',
              'ram_processor' => 'required',
              'battery' => 'required|max:255',
              'price' => 'required|numeric',
              'description' => 'required',
              'slug' => "required | alpha_dash | min:5 |max:255 | unique:posts,slug,$id"
            ));



      //save to db
      $post = Post::find($id);

      $post->title = $request->input('title');
      $post->display = $request->input('display');
      $post->camera = $request->input('camera');
      $post->ram_processor = $request->input('ram_processor');
      $post->battery = $request->input('battery');
      $post->price = $request->input('price');
      $post->description = $request->input('description');
      $post->slug = $request->input('slug');

      if ($request->hasFile('featured_image')) {
        $image = $request->file('featured_image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $location = public_path('images/'.$filename);
        Image::make($image)->save($location);
        $oldfilename = $post->image;

        // updated_db
        $post->image = $filename;

        // delete old
        Storage::delete($oldfilename);
      }
      $post->save();

      //flash data
      Session::flash('success','The Device Updated Successfully!');
      //return
      return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      Storage::delete($post->image);
      $post->delete();

      Session::flash('success','The Post Was Successfully! Deleted');
      return redirect()->route('posts.index');
    }
    public function logout () {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\User;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategory()
    {
        $categories = Category::all();
        $sel = "select *from product order by id desc limit 9 ";
        $res=DB::select( $sel);
         return view('welcome',['categories' => $categories,'data'=>$res]);
    }
    
    
    public function getuser(Request $request)
    {
      
        $user= "select *from users where type='user'";
        $res=DB::select($user);
         return view('index',['user' => $res]);
    }
    public function edituser(Request $request,$id)
    {
        $user= User::findOrFail($id);
     // dd($category);
        // $user= "select *from users where type='user'";
        // $res=DB::select($user);
         return view('edit_user',['user' => $user]);
    }
    public function updateUser(Request $request){
        //dd($request->all());
        
        $user = User::findOrFail($request->get('id'));
        $user->name = $request->name;
        $user->save();
        return response()->json(['status'=>true,'message' => 'User Update Successfully . . .']);

    }
     public function searchData(Request $request)
    {
       $category=$request->get('category');
       $proName=$request->get('name');
        $categories = "select *from product where category_name='$category' or name= '$proName' limit 50";
       
        $res=DB::select($categories);
       // dd($request->all());
         return view('search',['data' => $res,'res'=>$proName]);
    }
     
    public function index()
    {
        $categories = Category::all();
       
         return view('category.index',['categories' => $categories]);
    }
    public function create()
    {
        
        return view('category.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
           // 'sub_category' => 'required',
        ]);
      
            $category = new Category;
            $category->category_name = $request->category_name;
            $category->sub_category = ucfirst($request->sub_category);
            $category->save();
            
        return response()->json(['status'=>true,'message' => 'Category Saved Successfully . . .']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
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
        $request->validate([
            'category_name' => 'required|unique:categories|max:80',
        ]);

        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return response()->json(['status'=>true,'message' => 'Category Delete Successfully . . .']);

    }
}

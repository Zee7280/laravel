<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
       
         return view('supplier.index',['supplier' => $supplier]);
    }
    public function create()
    {
        
        return view('supplier.create');
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
            'name' => 'required',
           // 'website' => 'required',
        ]);
      
            $category = new Supplier;
            $category->name  = $request->name;
            $category->website = ucfirst($request->website);
            $category->save();
            
        return response()->json(['status'=>true,'message' => 'Supplier Saved Successfully . . .']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Supplier::findOrFail($id);
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

        $category = Supplier::findOrFail($id);
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
        Supplier::findOrFail($id)->delete();
        return response()->json(['status'=>true,'message' => 'Supplier Delete Successfully . . .']);

    }
}

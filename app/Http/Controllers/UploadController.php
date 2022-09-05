<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Supplier;
use App\Product;
use App\Ticket;

use DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
       public function addData(Request $request)
    {
        DB::table('customer')->insert([
            ['userid' =>  $request->get('userid'),
            'ip' => $request->ip(),
            'link' => $request->get('link')
            ],
        ]);
                return response()->json(['status'=>true,'message' => 'Data Saved Successfully . . .']);

        
    }
     
     
    public function index()
    {
        $category = Category::all();
        $supplier= Supplier::all();
        return view('upload.upload',['category'=>$category,'supplier'=>$supplier]);
    }
        public function getticket()
    {
        $ticket = Ticket::all();
        $supplier= Supplier::all();
        return view('ticket_index',['ticket'=>$ticket]);
    }
       public function ticket(Request $request)
    {
        $request->validate([
            'description' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required','min:8'],

        ]);
       
            $ticket = new Ticket;
             $res=$request->except('_token');

           $insert  = $ticket->insert($res);
            // $ticket->email = $request->email;
            // $ticket->description =$request->description;
            //  $ticket->phone = $request->phone;
            // $ticket->company = ucfirst($request->company);
            // $ticket->save();
            
        return response()->json(['status'=>true,'message' => 'Ticket Saved Successfully . . .']);
    }
      public function getProduct()
    {
        $product = Product::all();
        $supplier= Supplier::all();
        return view('product',['product'=>$product]);
    }
    
    public function data_upload(Request $request){

      $result='';
        $validatedData = $request->validate([
            'uploadfile' => ['required'],
        
        ]);
        ////////File Uplaod Code////////
                    $file = $request->file('uploadfile');
                    $data_type = $request->get('data_type');

                    $file_name = $file->getClientOriginalName();
                    $name = $file->getClientOriginalName();
                    $image['filePath'] = $name;

                    $file->move(public_path() . '/docs/', $file_name);
                    $filepath =( public_path() . '/docs/'. $file_name);

                    $rows = Excel::toArray(new UsersImport,$filepath);


   				////////File Uplaod Code start member Here////////
				    $in_row_records = $rows[0];
        			$count_other_column = 0;
        			$count=0;
        		//	dd($request->get('supplier'));
        for ($row_three = 2; $row_three < count($in_row_records)-1; $row_three++){
  			
				// $excel_date = $rows[0][$row_three][18]; //here is that value 41621 or 41631

                // $unix_date = ($excel_date - 25569) * 86400;
                // $excel_date = 25569 + ($unix_date / 86400);
                // $unix_date = ($excel_date - 25569) * 86400;
                // $b_date=gmdate("Y-m-d", $unix_date);
                
                //  $excel_date1 = $rows[0][$row_three][24]; //here is that value 41621 or 41631
                // $unix_date1 = ($excel_date1 - 25569) * 86400;
                // $excel_date1 = 25569 + ($unix_date1 / 86400);
                // $unix_date1 = ($excel_date1 - 25569) * 86400;
                // $e_date=gmdate("Y-m-d", $unix_date1);

                // $excel_date2 = $rows[0][$row_three][25]; //here is that value 41621 or 41631
                // $unix_date2 = ($excel_date2 - 25569) * 86400;
                // $excel_date2 = 25569 + ($unix_date2 / 86400);
                // $unix_date2 = ($excel_date2 - 25569) * 86400;
                // $u_date=gmdate("Y-m-d", $unix_date2);
                $text = preg_replace("/\r|\n|\t/", "", $rows[0][$row_three][8]);

        		  $insertData = array(
               //"hash"=>md5(rand(1111,5555). rand(6666,9999).time()),
                   "category_link"=>$rows[0][$row_three][1],
                   "link"=>$rows[0][$row_three][2],
                   "image"=>$rows[0][$row_three][3],
                   "brand"=>$rows[0][$row_three][4],
                   "name"=>$rows[0][$row_three][5],
                   "item"=>$rows[0][$row_three][6],
                   "model"=>$rows[0][$row_three][7],
                   "price"=>$text,
                   "category_name"=>$request->get('category'),
                   "supplier"=>$request->get('supplier')

                  );
              
                    
                     $result=Product::create($insertData);
				}
				//dd($insertData);
                if($result){
                    Session::flash('message', "Record has been added successfully.");
                 return redirect('upload');
                }else{
                    
                Session::flash('error', "Record Upload Failed Due to Incorrect data formate .");
                 return redirect('upload');
                }


        
                 

	}
	
	function Product(Request $request){
	    
	     $products = DB::table('products')
        ->orderBy('products.id', 'desc')
        ->get();
        return view('products.products_export',
        [
            'products' => $products
        
        ]);
	    
	}
	function contact(Request $request){
	    
	     $contact = DB::table('contacts')->get();
	    // dd($contact);
        return view('contact.contact_excel',['contact' => $contact]);
	    
	}
	function company(Request $request){
	    
	     $company = DB::table('companys')
        //->orderBy('products.id', 'desc')
        ->get();
        return view('companies.company_export',
        [
            'company' => $company
        
        ]);
	    
	}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}

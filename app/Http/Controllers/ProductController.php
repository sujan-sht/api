<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    
    //index page
    public function index(){
        $products=Product::latest()->paginate(5);
        return view('dashboard',compact('products'));
    }

    

    //create
    public function create(){
        return view('add');
    }

    public function show(Product $product)
    {
         return view('show',compact('product'));
    }

    //store
    public function store(Request $request){

        $data = $this->validateData($request);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Product::create($input);
     
        return redirect('dashboard')->with('status','Product has been added successfully');

        // 
        
        // $product = Product::create($data);
        // return redirect('dashboard')->with('status','Product has been added successfully');
    }

    //edit
    public function edit(Product $product){
        
        return view('edit',compact('product'));
    }

    //update
    public function update(Request $request,Product $product){
        $data = $this->validateData($request,$product);
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $product->update($input);
        // $product->update($data);

        return redirect('/dashboard')->with('status','Product has been updated successfully');

    }

    //delete
    public function delete(Product $product){
        $product->delete();
        return redirect('dashboard')->with('status','Product has been deleted successfully');
    }

    

    // Validate Data
    protected function validateData(Request $request,$product = null)
    {
        $id = $product->id ?? '';
        $validate_image = in_array($request->method(), ['PUT', 'PATCH']) ? 'sometimes' : 'sometimes|file|image|max:3000';
        return $request->validate([
            'name'=>'required|unique:products,name,' . $id,
            'detail'=>'required',
            'publication_year'=>'required',
            'image' => $validate_image
        ]);

        
        
    }
}

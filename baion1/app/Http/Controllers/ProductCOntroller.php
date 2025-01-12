<?php

namespace App\Http\Controllers;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $products = Product::with('Store')->paginate(5);
        // 'store_id','name','description','price',store_'name','address','phone'
        return view('index' ,compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = Store::get();
        return view('create', compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255', 
            'description' => 'nullable|string', 
            'price' => 'required|numeric|min:0.0',
            'store_id'=>'required|exists:stores,id'//store_id phai ton taij trong cot id cua bang stores
            
        ]);

        Product::create($request->all());
        return redirect()->route('index')->with('success','Sản phẩm đã được tao  thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findorFail($id);
        $stores = Store::all();
        // echo($issue);
        return view('edit',compact('product','stores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required|string|max:255', 
            'description' => 'nullable|string', 
            'price' => 'required|numeric|min:0.00',
            'store_id'=>'required|exists:stores,id'
        ]);
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('index')->with('success','Sản phẩm thu '.$id.' đã được cap nhap lai  thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $Product = Product::findOrFail($id);
        $Product->delete();
        return redirect()->route('index');
    }
}

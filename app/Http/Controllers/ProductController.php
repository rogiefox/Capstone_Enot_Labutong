<?php

namespace App\Http\Controllers;

use App\Models\ProductTable;

use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    // form and display (Product Page)
    public function create_product_form(){
        $ProductTable = ProductTable::query()
        ->select('*')
        ->get();

        return view('AdminProducts', compact('ProductTable'));
    }
    // form and display (Product Page)

    // create_product_getter (POST)
    public function create_product_getter(request $request){
        $ProductTable = new ProductTable;

        $file = $request->file('ProductImage');
        // gathering data

        $filenameextension = time() . "." . $request->ProductImage->extension();

        $filename = $request->getSchemeAndHttpHost() . "/image/" . $filenameextension;
        // generation of image name
        $request->ProductImage->move(public_path('/image/'), $filename);
        // pushing the selected image to ur slected folder

        $ProductTable->ProductImage = $filenameextension;
        $ProductTable->ProductName = $request->input('ProductName');
        $ProductTable->ProductDescription = $request->input('ProductDescription');
        $ProductTable->ProductPrice = $request->input('ProductPrice');
        $ProductTable->ProductCategory = $request->input('ProductCategory');
        $ProductTable->ProductType = $request->input('ProductType');
        $ProductTable->ProductCare = $request->input('ProductCare');
        $ProductTable->save();

        return redirect('products');
    }
    // create_product_getter (POST)
    
    // delete_product_getter (DELETE)
    public function delete_product_getter(string $id){
        $ProductTable = ProductTable::where('ProductID','=',$id)
        ->delete();

        return redirect('products');
    }
    // delete_product_getter (DELETE)

    // update_prodcut_gtter (PUT)
    public function update_product_getter(request $r, string $id){
        $ProductTable = ProductTable::where('ProductID','=',$id)
        ->update(
            [
                'ProductName' => $r->input('ProductName'),
                'ProductDescription' => $r->input('ProductDescription'),
                'ProductPrice' => $r->input('ProductPrice'),
                'ProductCategory' => $r->input('ProductCategory'),
                'ProductType' => $r->input('ProductType'),
                'ProductCare' => $r->input('ProductCare')
            ]
            );
            return redirect('products');
    }
    // update_prodcut_gtter (PUT)
}

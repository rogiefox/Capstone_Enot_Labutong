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

    // ***********************************FRONT ENDDDD*******************************
    // BY OCASSION CATEGORY

    // show featured and bestseller product
    public function show_indexproduct(){
        $FeaturedProduct = ProductTable::query()
        ->select('*')
        ->where('ProductCategory','=', 'FeaturedProduct')
        ->get();

        $BestSellerProduct = ProductTable::query()
        ->select('*')
        ->where('ProductCategory','=', 'BestSellerProduct')
        ->get();

        return view('/index', compact('FeaturedProduct','BestSellerProduct'));
    }
    // show featured and bestseller product

    // show_weddinganniversay
    public function show_weddinganniversary(){
        $WeddingAnniversary = ProductTable::query()
        ->select('*')
        ->where('ProductCategory','=', 'WeddingAnniversary')
        ->get();

        return view('/Ocassion/UserWedding', compact('WeddingAnniversary'));
    }
    // show_weddinganniversay

    // show_valentinesday
    public function show_valentinesday(){
        $ValentinesDay = ProductTable::query()
        ->select('*')
        ->where('ProductCategory','=', 'ValentinesDay')
        ->get();

        return view('/Ocassion/UserValentine', compact('ValentinesDay'));
    }
    // show_valentinesday

    // show_happybirthday
    public function show_happybirthday(){
        $HappyBirthday = ProductTable::query()
        ->select('*')
        ->where('ProductCategory','=', 'HappyBirthday')
        ->get();

        return view('/Ocassion/UserBirthday', compact('HappyBirthday'));
    }
    // show_happybirthday

    // show_mothersday
    public function show_mothersday(){
        $MothersDay = ProductTable::query()
        ->select('*')
        ->where('ProductCategory','=', 'MothersDay')
        ->get();

        return view('/Ocassion/UserMothers', compact('MothersDay'));
    }
    // show_mothersday

    // show_fathersday
    public function show_fathersday(){
        $FathersDay = ProductTable::query()
        ->select('*')
        ->where('ProductCategory','=', 'FathersDay')
        ->get();

        return view('/Ocassion/UserFathers',compact('FathersDay'));
    }
    // show_fathersday

    // show_baby
    public function show_baby(){
        $Baby = ProductTable::query()
        ->select('*')
        ->where('ProductCategory','=', 'Baby')
        ->get();

        return view('/Ocassion/UserBaby',compact('Baby'));
    }
    // show_baby

    // BY OCASSION CATEGORY

    // BY FLOWERS TYPE

    // show_peonies
    public function show_peonies(){
        $Peonies = ProductTable::query()
        ->select('*')
        ->where('ProductType','=', 'Peonies')
        ->get();

        return view('/Flower/UserPeonies',compact('Peonies'));
    }
    // show_peonies

    // show_carnation
    public function show_carnation(){
        $Carnation = ProductTable::query()
        ->select('*')
        ->where('ProductType','=', 'Carnation')
        ->get();

        return view('/Flower/UserCarnation',compact('Carnation'));
    }
    // show_carnation

    // show_gerberas
    public function show_gerberas(){
        $Gerberas = ProductTable::query()
        ->select('*')
        ->where('ProductType','=', 'Gerberas')
        ->get();

        return view('/Flower/UserGerberas',compact('Gerberas'));
    }
    // show_gerberas

    // show_lilies
    public function show_lilies(){
        $Lilies = ProductTable::query()
        ->select('*')
        ->where('ProductType','=', 'Lilies')
        ->get();

        return view('/Flower/UserLilies',compact('Lilies'));
    }
    // show_lilies

    // show_rose
    public function show_rose(){
        $Rose = ProductTable::query()
        ->select('*')
        ->where('ProductType','=', 'Rose')
        ->get();

        return view('/Flower/UserRose',compact('Rose'));
    }
    
    // show_rose

    // BY FLOWERS TYPE

}
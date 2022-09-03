<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Psy\Util\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
         * 1-product verileri json formatında dönecek
         * 2-yapılan işlemler try catch blokları içerisinde gerçekleşecek
         * 3-http response kodları hakkında bilgi edinilecek 200, 400, 401, 404, 500, 300, 301 ne anlama geliyor öğrenip uygulanacak
         * 4-getle alınan tablonun laravelin sayfalama özelliğine bakılarak belli sayıda alınması
         *
         * return response()->json([    ]); kullanılarak veriler json formatına çevrilir
         *
         * try catch için ilk olarak try komutu açılır ve if else yapısı kullanılarak if kısmında şartlar sağlanır ve else kısmına throw
         * kullanılarak hata kodu yazılır ve daha sonra catch kısmında $e ile hata yakalanır ve işlem yapılır
         *
         * 200 = Başarı durumları arasında yer alır tamam durumudur (yanıtın başarılı olduğunu gösterir)
         * 400 = İstemci hataları arasında kötü istek durumudur (kullanıcının yaptığı istekte yanlış talepte bulunduğunu gösterir eksik parametre gibi  )
         * 401 = İstemci hataları arasında yetkisiz durumudur (istek yapılan adreste giriş yetkilendirmesinin olmadığını gösterir)
         * 404 = İstemci hataları arasında sayfa bulunamadı durumudur
         * 500 = Sunucu hatası durumları arasında sunucu tarafından oluşan hataları belirtir (işlem sunucu tarafından yürümüyor ya da başlamıyor)
         * 300 = Yönlendirme durumları arasında çok seçenek durumudur (isteğin birden fazla yanıtı olduğunu gösterir)
         * 301 = Yönlendirme durumları arasında kalıcı taşındı durumudur (istenilen kaynağın kesin bir URL ye taşındığını gösterir)
         *
         * 'users' => DB::table('users')->paginate(15) bu şekilde sayfalama özelliği kullanılarak bir sayfaya istenilen sayıda veri alınabilir

        */
        $products = Product::paginate(25);
        return view('products.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = new Product();
        $product->ply_id = $request->ply_id;
        $product->commission_rate = $request->commission_rate;
        $product->discount_rate = $request->discount_rate;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->currency = $request->currency;
        $product->developer_name = $request->developer_name;
        $product->publisher_name = $request->publisher_name;
        $product->merchant_id = $request->merchant_id;
        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products)
    {
        //
    }
}

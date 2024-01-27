<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Picqer\Barcode\BarcodeGeneratorHTML;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        return view('product.product', compact('product', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function calculateEAN13Digit($data)
    {
        $sum = 0;

        for ($i = 0; $i < 12; $i++) {
            $digit = (int) $data[$i];
            $sum += ($i % 2 === 0) ? $digit : $digit * 3;
        }

        $modulo = $sum % 10;
        $checkDigit = ($modulo === 0) ? 0 : 10 - $modulo;

        return $checkDigit;
    }

    public function store(Request $request)
    {
        $product = new Product();

        // Membuat barcode dengan data tertentu (contoh: nama produk)
        $barcodeGenerator = new BarcodeGeneratorHTML();
        $num = (string) mt_rand(100000000000, 999999999999);
        // return $num;
        $digitControl = $this->calculateEAN13Digit($num);
        $fullBarcodeData = $num . $digitControl;
        $barcode = $barcodeGenerator->getBarcode($fullBarcodeData, $barcodeGenerator::TYPE_EAN_13);

        //ambil info file
        $file = $request->file('foto');
        //rename
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $tujuan_upload = './product/';
        $file->move($tujuan_upload, $nama_file);

        $product->nama_produk = $request->nama_product;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->category_id = $request->category_id;
        $product->foto = $nama_file;
        $product->barcode = $barcode;
        $product->kode_produk = $fullBarcodeData;

        $product->save();

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Mengambil data produk berdasarkan ID
        $product = Product::find($id);

        // Mengembalikan data dalam format JSON
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if ($request->hasFile('foto')) {
            //hapus foto lama
            File::delete('./product/' . $product->foto);

            //ambil info file
            $file = $request->file('foto');

            //rename
            $nama_file = time() . "_" . $file->getClientOriginalName();

            //proses upload
            $tujuan_upload = './product/';
            $file->move($tujuan_upload, $nama_file);
            $product->foto = $nama_file;
        }

        $product->nama_produk = $request->nama_product;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('products.index'));
    }

    public function hapus($id)
    {
        $product = Product::find($id);
        File::delete('./product/' . $product->foto);
        $product->delete();
        // return $product;

        return redirect(route('products.index'));
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Picqer\Barcode\BarcodeGeneratorPNG;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function createWithBarcode($attributes)
    {
        $barcodeGenerator = new BarcodeGeneratorPNG();
        $barcode = $barcodeGenerator->getBarcode($attributes['nama_product'], $barcodeGenerator::TYPE_CODE_128);

        return self::create(array_merge($attributes, ['barcode' => $barcode]));
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            CREATE TRIGGER `reduce_stock` AFTER INSERT ON `carts`
            FOR EACH ROW UPDATE `products` SET products.stok = products.stok - NEW.qty
            WHERE products.id = NEW.products_id 
        ');
        DB::unprepared('
            CREATE TRIGGER `restore_stock` AFTER DELETE ON `carts`
            FOR EACH ROW UPDATE `products` SET products.stok = products.stok + OLD.qty
            WHERE products.id = OLD.products_id
        ');
        DB::unprepared('
            CREATE TRIGGER `update_stock` AFTER UPDATE ON `carts`
            FOR EACH ROW UPDATE `products` SET products.stok = (products.stok + OLD.qty) - NEW.qty
            WHERE products.id = OLD.products_id
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER `reduce_stock`');
        DB::unprepared('DROP TRIGGER `restore_stock`');
        DB::unprepared('DROP TRIGGER `update_stock`');
    }
};

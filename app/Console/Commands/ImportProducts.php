<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ImportProducts extends Command
{
    protected $signature = 'import:products {percentage}';
    protected $description = 'Import products from JSON and adjust prices';

    public function handle()
    {
        $percentage = $this->argument('percentage');
        $products = json_decode(file_get_contents('products.json'), true);

        foreach ($products as $product) {
            $product['price'] = $product['price'] * (1 + $percentage / 100);
            Product::create($product);
        }

        $this->info('Products imported and prices adjusted.');
        $this->line(json_encode(Product::all(), JSON_PRETTY_PRINT));
    }
}


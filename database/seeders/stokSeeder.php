<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class stokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stok = [];
for ($i = 1; $i <= 15; $i++) {
    $stok[] = [
        'stok_id' => $i,
        'barang_id' => $i,
        'user_id' => 1, 
        'stok_tanggal' => now(),
        'stok_jumlah' => 50, // Default stok 50 per barang
    ];
}
DB::table('t_stok')->insert($stok);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class penjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjualan = [];
for ($i = 1; $i <= 10; $i++) {
    $penjualan[] = [
        'penjualan_id' => $i,
        'user_id' => 3, 
        'pembeli' => 'Pelanggan ' . $i,
        'penjualan_kode' => 'TRX' . sprintf("%03d", $i),
        'penjualan_tanggal' => now(),
    ];
}
DB::table('t_penjualan')->insert($penjualan);
    }
}

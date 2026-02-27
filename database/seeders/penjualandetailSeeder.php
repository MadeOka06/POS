<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penjualandetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail = [];
$id = 1;
for ($p = 1; $p <= 10; $p++) {
    for ($b = 1; $b <= 3; $b++) {
        $barang_id = rand(1, 15);
        $detail[] = [
            'detail_id' => $id++,
            'penjualan_id' => $p,
            'barang_id' => $barang_id,
            'harga' => 10000, // Harga dummy, sesuaikan jika perlu join m_barang
            'jumlah' => rand(1, 2),
        ];
    }
}
DB::table('t_penjualan_detail')->insert($detail);
    }
}

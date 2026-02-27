<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
    // Supplier 1 - Elektronik
    ['barang_id'=>1, 'kategori_id'=>1, 'barang_kode'=>'TV01', 'barang_nama'=>'Smart TV 32"', 'harga_beli'=>2000000, 'harga_jual'=>2500000],
    ['barang_id'=>2, 'kategori_id'=>1, 'barang_kode'=>'MK01', 'barang_nama'=>'Microwave', 'harga_beli'=>800000, 'harga_jual'=>1000000],
    ['barang_id'=>3, 'kategori_id'=>1, 'barang_kode'=>'BL01', 'barang_nama'=>'Blender', 'harga_beli'=>300000, 'harga_jual'=>450000],
    ['barang_id'=>4, 'kategori_id'=>1, 'barang_kode'=>'KF01', 'barang_nama'=>'Kipas Angin', 'harga_beli'=>150000, 'harga_jual'=>200000],
    ['barang_id'=>5, 'kategori_id'=>1, 'barang_kode'=>'ST01', 'barang_nama'=>'Setrika', 'harga_beli'=>100000, 'harga_jual'=>150000],
    // Supplier 2 - Sembako & Makanan
    ['barang_id'=>6, 'kategori_id'=>2, 'barang_kode'=>'BS01', 'barang_nama'=>'Beras 5kg', 'harga_beli'=>60000, 'harga_jual'=>75000],
    ['barang_id'=>7, 'kategori_id'=>2, 'barang_kode'=>'MG01', 'barang_nama'=>'Minyak Goreng 2L', 'harga_beli'=>30000, 'harga_jual'=>36000],
    ['barang_id'=>8, 'kategori_id'=>3, 'barang_kode'=>'SN01', 'barang_nama'=>'Keripik Kentang', 'harga_beli'=>8000, 'harga_jual'=>12000],
    ['barang_id'=>9, 'kategori_id'=>3, 'barang_kode'=>'SN02', 'barang_nama'=>'Biskuit Cokelat', 'harga_beli'=>5000, 'harga_jual'=>7500],
    ['barang_id'=>10, 'kategori_id'=>3, 'barang_kode'=>'SN03', 'barang_nama'=>'Permen Mint', 'harga_beli'=>2000, 'harga_jual'=>3500],
    // Supplier 3 - Minuman & ATK
    ['barang_id'=>11, 'kategori_id'=>4, 'barang_kode'=>'MN01', 'barang_nama'=>'Air Mineral', 'harga_beli'=>2500, 'harga_jual'=>4000],
    ['barang_id'=>12, 'kategori_id'=>4, 'barang_kode'=>'MN02', 'barang_nama'=>'Teh Botol', 'harga_beli'=>3500, 'harga_jual'=>5000],
    ['barang_id'=>13, 'kategori_id'=>5, 'barang_kode'=>'AK01', 'barang_nama'=>'Buku Tulis', 'harga_beli'=>4000, 'harga_jual'=>6000],
    ['barang_id'=>14, 'kategori_id'=>5, 'barang_kode'=>'AK02', 'barang_nama'=>'Pulpen Gel', 'harga_beli'=>3000, 'harga_jual'=>5000],
    ['barang_id'=>15, 'kategori_id'=>5, 'barang_kode'=>'AK03', 'barang_nama'=>'Kertas HVS', 'harga_beli'=>45000, 'harga_jual'=>55000],
];
DB::table('m_barang')->insert($data);
    }
}

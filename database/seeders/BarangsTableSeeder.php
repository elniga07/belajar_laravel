<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs =[
            ['nama_barang'=>'HandPhone', 'merk' =>'Iphone 15', 'harga' =>'15000000'],
            ['nama_barang'=>'HandPhone', 'merk' =>'Samsung A55', 'harga' =>'5000000'],
            ['nama_barang'=>'HandPhone', 'merk' =>'Poco F4', 'harga' =>'6000000'],
            ['nama_barang'=>'Laptop', 'merk' =>'Lenovo ThinkPad', 'harga' =>'4000000'],
            ['nama_barang'=>'Laptop', 'merk' =>'Asus TUF', 'harga' =>'12000000']
        ];
        DB::table('barangs')->insert($barangs);
    }
}

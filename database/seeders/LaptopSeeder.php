<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use App\Models\Product;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laptops = 
        [
            // A1
            [
                'nama'             => 'Nita',
                'Alamat'           => 'Jakarta Utara',
                'email'            => 'nita@gmail.com',
                'no_hp'         => '085689752978',
                'Jenis_kelamin'    => 'Perempuan',
                'Jabatan_posisi'    => 'Operations Manager',
                
            ],
            // A2
            [
                'nama'             => 'HP SPECTRE 15 X360 OLED 4K UHD',
                'detail'           => '3D Editing / Gaming Laptop',
                'harga'            => '26000000',
                'prosesor'         => '31.2',
                'kapasitas_ram'    => '16',
                'kapasitas_hdd'    => '0',
                'kapasitas_ssd'    => '1000',
                'kapasitas_vram'   => '4',
                'kapasitas_maxram' => '16',
                'berat'            => '2090',
                'ukuran_layar'     => '15',
                'jenis_layar'      => '5',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '8294400',
            ],
            // A3
            [
                'nama'             => 'Asus ZEPHYRUS GA502IU',
                'detail'           => '3D Editing / Gaming Laptop',
                'harga'            => '25000000',
                'prosesor'         => '48',
                'kapasitas_ram'    => '8',
                'kapasitas_hdd'    => '0',
                'kapasitas_ssd'    => '1000',
                'kapasitas_vram'   => '6',
                'kapasitas_maxram' => '24',
                'berat'            => '2100',
                'ukuran_layar'     => '15',
                'jenis_layar'      => '3',
                'refresh_rate'     => '144',
                'resolusi_layar'   => '2073600',
            ],
            // A4
            [
                'nama'             => 'Lenovo Yoga Duet 7i-13IML05',
                'detail'           => 'Office Laptop',
                'harga'            => '19000000',
                'prosesor'         => '18.4',
                'kapasitas_ram'    => '16',
                'kapasitas_hdd'    => '0',
                'kapasitas_ssd'    => '512',
                'kapasitas_vram'   => '1',
                'kapasitas_maxram' => '16',
                'berat'            => '1100',
                'ukuran_layar'     => '13',
                'jenis_layar'      => '3',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '2916000',
            ],
            // A5
            [
                'nama'             => 'Asus Zenbook 13 UX325EA i7 1165G7',
                'detail'           => 'Office Laptop',
                'harga'            => '17500000',
                'prosesor'         => '10.4',
                'kapasitas_ram'    => '16',
                'kapasitas_hdd'    => '0',
                'kapasitas_ssd'    => '512',
                'kapasitas_vram'   => '1',
                'kapasitas_maxram' => '16',
                'berat'            => '1100',
                'ukuran_layar'     => '13',
                'jenis_layar'      => '3',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '2073600',
            ],
            // A6
            [
                'nama'             => 'Asus TUF FX506IU-R766B7T',
                'detail'           => '3D Editing / Gaming Laptop',
                'harga'            => '17000000',
                'prosesor'         => '46.4',
                'kapasitas_ram'    => '8',
                'kapasitas_hdd'    => '1000',
                'kapasitas_ssd'    => '256',
                'kapasitas_vram'   => '6',
                'kapasitas_maxram' => '32',
                'berat'            => '2300',
                'ukuran_layar'     => '15',
                'jenis_layar'      => '5',
                'refresh_rate'     => '144',
                'resolusi_layar'   => '2073600',
            ],
            // A7
            [
                'nama'             => 'HP Spectre 13 X360',
                'detail'           => 'Office Laptop',
                'harga'            => '15500000',
                'prosesor'         => '8.8',
                'kapasitas_ram'    => '8',
                'kapasitas_hdd'    => '0',
                'kapasitas_ssd'    => '256',
                'kapasitas_vram'   => '1',
                'kapasitas_maxram' => '8',
                'berat'            => '1200',
                'ukuran_layar'     => '13',
                'jenis_layar'      => '3',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '8294400',
            ],
            // A8
            [
                'nama'             => 'HP Pavilion Gaming 15-DK1041TX',
                'detail'           => '3D Editing / Gaming Laptop',
                'harga'            => '15000000',
                'prosesor'         => '31.2',
                'kapasitas_ram'    => '8',
                'kapasitas_hdd'    => '1000',
                'kapasitas_ssd'    => '256',
                'kapasitas_vram'   => '4',
                'kapasitas_maxram' => '32',
                'berat'            => '2250',
                'ukuran_layar'     => '15',
                'jenis_layar'      => '3',
                'refresh_rate'     => '144',
                'resolusi_layar'   => '2073600',
            ],
            // A9
            [
                'nama'             => 'ASUS S430UN EB533T',
                'detail'           => '2D Editing / Office Laptop',
                'harga'            => '12000000',
                'prosesor'         => '12.8',
                'kapasitas_ram'    => '8',
                'kapasitas_hdd'    => '1000',
                'kapasitas_ssd'    => '256',
                'kapasitas_vram'   => '2',
                'kapasitas_maxram' => '20',
                'berat'            => '1400',
                'ukuran_layar'     => '14',
                'jenis_layar'      => '3',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '2073600',
            ],
            // A10
            [
                'nama'             => 'HP 14s-DK0158AU',
                'detail'           => '2D Editing / Office Laptop',
                'harga'            => '8500000',
                'prosesor'         => '16.8',
                'kapasitas_ram'    => '8',
                'kapasitas_hdd'    => '0',
                'kapasitas_ssd'    => '512',
                'kapasitas_vram'   => '2',
                'kapasitas_maxram' => '20',
                'berat'            => '1470',
                'ukuran_layar'     => '14',
                'jenis_layar'      => '3',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '2073600',
            ],
            // A11
            [
                'nama'             => 'Asus A442UR',
                'detail'           => '2D Editing / Office Laptop',
                'harga'            => '6300000',
                'prosesor'         => '12.8',
                'kapasitas_ram'    => '4',
                'kapasitas_hdd'    => '1000',
                'kapasitas_ssd'    => '0',
                'kapasitas_vram'   => '2',
                'kapasitas_maxram' => '20',
                'berat'            => '1400',
                'ukuran_layar'     => '14',
                'jenis_layar'      => '1',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '1049088',
            ],
            // A12
            [
                'nama'             => 'Asus A412UA',
                'detail'           => 'Office Laptop',
                'harga'            => '6000000',
                'prosesor'         => '9.2',
                'kapasitas_ram'    => '4',
                'kapasitas_hdd'    => '0',
                'kapasitas_ssd'    => '512',
                'kapasitas_vram'   => '1',
                'kapasitas_maxram' => '12',
                'berat'            => '1500',
                'ukuran_layar'     => '14',
                'jenis_layar'      => '1',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '2073600',
            ],
            // A13
            [
                'nama'             => 'Lenovo V14-ADA ERID',
                'detail'           => 'Office Laptop',
                'harga'            => '5400000',
                'prosesor'         => '10.4',
                'kapasitas_ram'    => '4',
                'kapasitas_hdd'    => '0',
                'kapasitas_ssd'    => '256',
                'kapasitas_vram'   => '1',
                'kapasitas_maxram' => '12',
                'berat'            => '1600',
                'ukuran_layar'     => '14',
                'jenis_layar'      => '1',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '1049088',
            ],
            // A14
            [
                'nama'             => 'Asus Notebook E402YA-GA202T',
                'detail'           => 'Office Laptop',
                'harga'            => '4700000',
                'prosesor'         => '7.2',
                'kapasitas_ram'    => '4',
                'kapasitas_hdd'    => '1000',
                'kapasitas_ssd'    => '0',
                'kapasitas_vram'   => '1',
                'kapasitas_maxram' => '8',
                'berat'            => '1650',
                'ukuran_layar'     => '14',
                'jenis_layar'      => '1',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '1049088',
            ],
            // A15 ( batas pada proposal )
            [
                'nama'             => 'DELL Inspiron 3180-A9',
                'detail'           => 'Office Laptop',
                'harga'            => '3900000',
                'prosesor'         => '3.6',
                'kapasitas_ram'    => '4',
                'kapasitas_hdd'    => '500',
                'kapasitas_ssd'    => '0',
                'kapasitas_vram'   => '1',
                'kapasitas_maxram' => '12',
                'berat'            => '1460',
                'ukuran_layar'     => '11',
                'jenis_layar'      => '1',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '921600',
            ],
            // A16
            [
                'nama'             => 'DELL Inspiron 3180-A9',
                'detail'           => 'Office Laptop',
                'harga'            => '3900000',
                'prosesor'         => '3.6',
                'kapasitas_ram'    => '4',
                'kapasitas_hdd'    => '500',
                'kapasitas_ssd'    => '0',
                'kapasitas_vram'   => '1',
                'kapasitas_maxram' => '12',
                'berat'            => '1460',
                'ukuran_layar'     => '11',
                'jenis_layar'      => '1',
                'refresh_rate'     => '60',
                'resolusi_layar'   => '921600',
            ],
        ];

        foreach ($laptops as $laptop) {
            Product::create(
                [
                    'name'              => $laptop['nama'],
                    'detail'            => $laptop['detail'],
                    'harga'             => $laptop['harga'],
                    'prosesor'          => $laptop['prosesor'],
                    'kapasitas_ram'     => $laptop['kapasitas_ram'],
                    'kapasitas_hdd'     => $laptop['kapasitas_hdd'],
                    'kapasitas_ssd'     => $laptop['kapasitas_ssd'],
                    'kapasitas_vram'    => $laptop['kapasitas_vram'],
                    'kapasitas_maxram'  => $laptop['kapasitas_maxram'],
                    'berat'             => $laptop['berat'],
                    'ukuran_layar'      => $laptop['ukuran_layar'],
                    'jenis_layar'       => $laptop['jenis_layar'],
                    'refresh_rate'      => $laptop['refresh_rate'],
                    'resolusi_layar'    => $laptop['']
                ]
            );
       }
    }
}

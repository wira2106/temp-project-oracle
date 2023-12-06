<?php

namespace App\Http\Controllers;

use App\Transformers\DataMemberTransformers;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class MemberController extends Controller
{
    public function index(){

    }

    public function view(Request $request){
        $data_member = [];
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 60; $i++) {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $name = strtoupper($firstName . " " . $lastName);
            $kode_cabang = $faker->numberBetween(1, 60);
            $kode_member = 13220+$i;
            $email = strtolower($firstName . $lastName) . '@gmail.com';
            $address = $faker->randomElement([
                'Jl. Kenangan, Gang Hujan',
                'Jl. Sudirman, Gang Kenangan',
                'Jl. Gajah Mada, Gang I',
                'Jl. Mawar Merah, Gang II',
                'Jl. Kebo Iwa , Gang II'
            ]);
            
            $data_member[] = (object)[
                "kode_cabang" => $kode_cabang,
                "alamat_surat" => strtoupper($address),
                "kode_member" => $kode_member,
                "kota" => "",
                "nama" => $name,
                "kelurahan" => "",
                "no_ktp" => "",
                "kode_pos" => "",
                "alamat_ktp" => strtoupper($address),
                "no_hp" => "",
                "tgl_lahir" => "",
                "kota_ktp" => "",
                "jenis_outlet" => "-",
                "kelurahan_ktp" => "",
                "sub_outlet" => "",
                "kode_pos_ktp" => "",
                "pkp" => "",
                "area" => "",
                "telepon" => "",
                "kredit" => "",
                "top" => "",
                "jenis_cust" => "",
                "bebas_iuran" => "",
                "retail_khusus" => "",
                "ganti_kartu" => "",
                "jarak" => "",
                "limit" => "",
                "npwp" => "",
                "blocking_pengiriman" => "",
                "salesman" => "",
                "alamat_email" => $email,
            ];

        }

        return DataMemberTransformers::collection($data_member);

    }
}

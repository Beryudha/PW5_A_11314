<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Login');
});

Route::get('/dashboard', function () {
    return view('Dashboard');
});

Route::get('/gyms', function () {
    return view('Gyms/index', [
        "title" => "Index",
        'kelas' => [
            [
                'no' => 1,
                "gambar" => "https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png",
                "nama" => "Body Combat",
                'instruktur' => 'Jolly',
                'ruang' => 'Kelas A',
                'rating' => '5'
            ],
            [
                'no' => 2,
                'gambar' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/dc/83/bc.jpg',
                'nama' => 'Bungee ',
                'instruktur' => 'Agung',
                'ruang' => 'Kelas B',
                'rating' => '3',
            ],
            [
                'no' => 3,
                'gambar' => 'https://fitbod.me/wp-content/uploads/2021/07/yoga-and-the-gym-on-the-same-day.jpg',
                'nama' => 'Yogalates ',
                'instruktur' => 'Raka',
                'ruang' => 'Kelas C',
                'rating' => '4',
            ],
            [
                'no' => 4,
                'gambar' =>
                'https://res.cloudinary.com/display97/image/upload/7930/boxing2-224119.jpeg',
                'nama' => 'Boxing ',
                'instruktur' => 'Tebri',
                'ruang' => 'Kelas D',
                'rating' => '5',
            ]
        ],
        
    ]);
});

Route::get('/presensi', function () {
    return view('Gyms/presensi', [
        "title" => "Presensi",
        "nama" => "Bernardus Anggodho Aryudhawan Hadi",
        "npm" => "210711314",
        "ruang" => "Kelas A",
        "totMember" => "6",
        "rating" => "10",
        'member' => [
            [
                'namaMember' => 'test',
                'email' => '@gmail.com',
                'telp' => '123',
                'jenisKartu' => 'Gold',
                'metodePembayaran' => 'Deposit Kelas'
            ],
            [
                'namaMember' => 'test2',
                'email' => '@gmail.com',
                'telp' => '123',
                'jenisKartu' => 'Silver',
                'metodePembayaran' => 'Deposit Uang'
            ],
            [
                'namaMember' => 'test3',
                'email' => '@gmail.com',
                'telp' => '123',
                'jenisKartu' => 'Black',
                'metodePembayaran' => 'Deposit Kelas'
            ],
            [
                'namaMember' => 'test4',
                'email' => '@gmail.com',
                'telp' => '123',
                'jenisKartu' => 'Gold',
                'metodePembayaran' => 'Deposit Uang'
            ],
            [
                'namaMember' => 'test5',
                'email' => '@gmail.com',
                'telp' => '123',
                'jenisKartu' => 'Silver',
                'metodePembayaran' => 'Deposit Kelas'
            ],
            [
                'namaMember' => 'test6',
                'email' => '@gmail.com',
                'telp' => '123',
                'jenisKartu' => 'Black',
                'metodePembayaran' => 'Deposit Uang'
            ]
        ]
    ]);
});
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamiController extends Controller
{
    public function index()
    {
        // Data nama dan foto orang
        $kami = [
            [
                'name' => 'Fajar Khakim',
                'photo' => 'people/Fajar.jpeg',
                'nim'  => '22.83.0773'
            ],
            [
                'name' => 'Eprilian Firmansyah',
                'photo' => 'people/22_83_0779.png',
                'nim'  => '22.83.0779'
            ],
            [
                'name' => 'Yusuf Nur Hanafi',
                'photo' => 'people/22_83_0810.png',
                'nim'  => '22.83.0810'
            ],
            [
                'name' => 'M Priandika Bayu F',
                'photo' => 'people/22_83_0798.jpg',
                'nim'  => '22.83.0798'
            ]
        ];

        // Kirim data ke view
        return view('kami.index', compact('kami'));
    }
}

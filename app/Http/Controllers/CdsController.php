<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CdsController extends Controller
{
    //
    public function cds() {

        $cdsList = [
            [
                'imgpath' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
                'album' => 'New Jersey',
                'artist' => 'Bon Jovi',
                'year' => 1988
            ],
            [
                'imgpath' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
                'album' => 'Live at Wembley 86',
                'artist' => 'Queen',
                'year' => 1992
            ],
            [
                'imgpath' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
                'album' => 'Ten\'s Summoner\'s Tales',
                'artist' => 'Sting',
                'year' => 1993
            ],
            [
                'imgpath' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
                'album' => 'Steve Gadd band',
                'artist' => 'Steve Gadd band',
                'year' => 2018
            ],
            [
                'imgpath' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg',
                'album' => 'Brave new World',
                'artist' => 'Iron Maiden',
                'year' => 2000
            ],
            [
                'imgpath' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
                'album' => 'ne more car, one more rider',
                'artist' => 'Eric Clapton',
                'year' => 2002
            ]
        ];

        // return view('cds', $cdsList);
        return view('cds', compact('cdsList'));
    }

}

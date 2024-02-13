<?php

namespace App\Http\Controllers;
use App\Models\submodel;
use Faker\Guesser\Name;
use PhpParser\Node\Expr\Print_;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Http\Request;
use App\Models\subs;

class subcontroller extends Controller
{





    public function store1(Request $request)
    {
        // Formdan gelen verileri doğrula
        $request->validate([
            'eposta'=>'required',
        ]);

        // Formdan gelen verileri yeni model oluşturarak veritabanına kaydet
        subs::create([
            'eposta'=> $request->eposta,
        ]);

        return redirect('/#anasayfa');


}



}

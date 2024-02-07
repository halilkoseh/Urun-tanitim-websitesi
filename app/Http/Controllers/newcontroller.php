<?php

namespace App\Http\Controllers;

use App\Models\newmodel;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;
use Symfony\Contracts\Service\Attribute\Required;

class newcontroller extends Controller
{

    public function store(Request $request)
    {
        // Formdan gelen verileri doğrula
        $request->validate([
            'nameSurname'=>'required',
            'email'=>'required',
            'title'=>'required',
            'message'=>'required',
        ]);

        // Formdan gelen verileri yeni model oluşturarak veritabanına kaydet
        newmodel::create([
            'nameSurname'=> $request->nameSurname,
            'email'=> $request->email,
            'title'=> $request->title,
            'message'=> $request->message,
        ]);

        return redirect('/#iletisim');


}
}

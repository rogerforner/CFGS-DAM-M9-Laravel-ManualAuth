<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
class HomeController extends Controller
{
    public function index()
    {
        $user = new \stdClass();

//        $user->name = "asdasd";
//        $pdo = new PDO('sqlite:/home/sergi/Code/laravelManualAuth/database/database.sqlite');
//        $query = $pdo->prepare('SELECT * FROM users WHERE id=1');
//        $query->execute();
//        $row = $query->fetch();
//        dd($row);

        // 1) Aconseguir informació de la BD.
        // 2) Mostrar vista home passant info del usuari.
        //$user = User::find(1);
        $user->name="Roger";
        $user->sn1="Forner";
        return view('home')->withUser($user); //resources/views/home.blade.php
    }
}
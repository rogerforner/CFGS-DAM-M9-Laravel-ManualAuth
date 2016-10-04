<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

use PDO;
class HomeController extends Controller
{
    public function index()
    {
        $user = new \stdClass();

    // Fem una pdo a partir del nostre fitxer sqlite.
        $pdo = new PDO('sqlite:/home/rogerforner/Code/laravelManualAuth/database/database.sqlite');
        $query = $pdo->prepare('SELECT * FROM users WHERE id=1');
        $query->execute();
        $row = $query->fetch();
        //dd($row);

        //Funció estàtica que ens retorna el registre que li indiquem.
        $user=User::find(1);
        // 1) Aconseguir informació de la BD.
        // 2) Mostrar vista home passant info del usuari.
//        $user = User::find(1);
//        $user->name="Roger";
//        $user->sn1="Forner";
        return view('home')->withUser($user); //resources/views/home.blade.php
    }
}
<?php
namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

//use PDO;
class HomeController extends Controller
{
    /*
    public function __construct()
    {
        //Porta que ens diu on anar al fer la autenticació. Per evitar if/else.
        $this->middleware('auth');
        */
    //}
    /**
     * @return mixed
     */
    public function index()
    {
//
//        //Controlador només fa la seva feina.
//        $user=Auth::user();
//        return view('home')->withUser($user);
//        $user = new \stdClass();
//
//    // Fem una pdo a partir del nostre fitxer sqlite.
//        $pdo = new PDO('sqlite:/home/rogerforner/Code/laravelManualAuth/database/database.sqlite');
//        $query = $pdo->prepare('SELECT * FROM users WHERE id=1');
//        $query->execute();
//        $row = $query->fetch();
//        //dd($row);
//
//        //Funció estàtica que ens retorna el registre que li indiquem.
//        $user=User::find(1);
//        // 1) Aconseguir informació de la BD.
//        // 2) Mostrar vista home passant info del usuari.
////        $user = User::find(1);
////        $user->name="Roger";
////        $user->sn1="Forner";
//        return view('home')->withUser($user); //resources/views/home.blade.php
//
//        $user = $this->getUser();
//        return view('home')
//            ->withUser($user);
//    }
//
        //Estat sessió

//Obect cookie to user
        $this->setUserCookie();


        if ($this->userIsAuthenticated()) {
            $user = $this->getUser();
            return view('home')->withUser($user);
        } else {
            return redirect('login');
        }

    }

//json per ficar a la url'{"name": "Roger","sn1":"Forner"}'

        private
        function getUser()
        {
            //Opció 1: query strings $_GET
            //dd(json_decode('{"name": "Roger","sn1":"Forner"}'));
//            dd(Hash::make(1));
//            $id =$_GET['user'];
//            //return json_decode($_GET['user']);
//            return User::findOrFail($id);
            $token= $_COOKIE['user'];
            return User::where(["token" => $token])->first();
        }

        private
        function userIsAuthenticated()
        {
            //dd($_GET['user']);
//
//            if (isset($_GET['user'])) {
//                return true;
//            } else {
//                return false;
//            }
            //return isset($_COOKIE['user']) ? true : false ;
        }

    private function setUserCookie()
    {
        $user= User::findOrFail(1);
        setcookie('user',$user->token);
    }

}

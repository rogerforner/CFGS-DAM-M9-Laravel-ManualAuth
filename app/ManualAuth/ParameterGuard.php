<?php
/**
 * Created by PhpStorm.
 * User: rogerforne
 * Date: 25/10/16
 * Time: 20:26
 */

namespace App\ManualAuth;

use Illuminate\Http\Request;

class ParameterGuard implements Guard
{
    protected $request;

    /**
     * ManualGuardByIDParameter constructor.
     * @param $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * ManualGuard constructor.
     */

    public function check(){

       if($this->request->has('id')){
           return true;
       }
    return false;


    }

    public function validate(array $credentials){
        return true;
    }

    public function setUser($user){
        //Implementar set user
    }

}
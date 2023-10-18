<?php
declare(strict_types=1);

namespace App\Controller\Web\Customer;
use App\Controller\Controller;


class AuthController extends Controller{
  
    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        print_r($_REQUEST);
    }
    public function register()
    {
        $validation = $this->validator->validate($_POST, [
            'firstName'=> 'required',
            'lastName'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required|min:6'
        ]);

        if ($validation->fails()) {
            $errors = $validation->errors();
            return redirectWithData('/register',[
                'errors'=>$errors->firstOfAll()
            ]);  
        }

        
        
    }
}
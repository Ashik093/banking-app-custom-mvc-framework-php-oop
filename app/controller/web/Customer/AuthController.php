<?php
declare(strict_types=1);

namespace App\Controller\Web\Customer;
use App\Controller\Controller;
use App\Services\Customer\AuthService;


class AuthController extends Controller{
    
    private AuthService $authService;
    public function __construct()
    {
        parent::__construct();
        $this->authService = new AuthService();

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

        $this->authService->register($_POST);
        
        
    }
}
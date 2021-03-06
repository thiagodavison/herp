<?php

class LoginController extends BaseController {

    /**
     * Instantiate a new UserController instance.
     */
    public function __construct()
    {
        $this->beforeFilter(function()
        {
            //
        });
    }

    public function Check()
    {

        $email      = Input::get('email');
        $password   = Input::get('password');
        //$password   = Hash::make($password);

         if ( Auth::attempt(array('email' => $email, 'password' => $password)))
         {
             return Redirect::route('dashboard');
         }
         else
         {
            return Redirect::route('login')
                ->with('error_message', Lang::get('messages.error_auth') ) 
                ->withInput();
         }
        

    }

    public function Logout()
    {

        Auth::Logout();
        return Redirect::route('login');
    }

}

?>
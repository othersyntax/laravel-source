<?php
  //Login guna fungsi Auth tapi table tak follow laravel table (users)
  public function authenticate(Request $req){
        $user = User::where('user_email', '=', $req->user_email)->first();
        if($user && Hash::check($req->user_pswd, $user->user_pswd)){
            Auth::login($user);
            if(Auth::check()){
                return redirect()->intended('dashboard');
            }
        } 
        return back()->with('loginError', 'Email atau katalaluan salah, Sila cuba lagi.');
    }


?>

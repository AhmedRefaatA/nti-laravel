<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function home(){
        return view('register');
    }

    private function clean($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = strip_tags($input);

    return $input;
    }
    private function validation($input, $flag){
    
        switch ($flag) {
        case 1:
                # code...
                if(!empty($input)){
                return true;
                }
                break;
    
        case 2: 
            if(preg_match('/^[a-zA-Z\s]*$/',$input)){
                return true;
            }
            break;
    
        case 3: 
            if(filter_var($input,FILTER_VALIDATE_EMAIL)){
                return true;
            } 
            break; 

        case 4: 
            if(strlen($input) > 6){
                return true;
            break;
        }

        case 5: 
            if(filter_var($input,FILTER_VALIDATE_URL)){
                return true;
            } 
            break; 
            
    
    }
}
    
    public function create(Request $request){
        $name = $this->clean($request->name);
        $email = $this->clean($request->email);
        $password = $this->clean($request->password);
        $linkedin = $this->clean($request->linkedin);
        $address = $this->clean($request->address);
        if($this->validation($name, 2) && 
        $this->validation($email, 3) &&
        $this->validation($password, 4) &&
        $this->validation($linkedin, 5) &&
        $this->validation($address, 2)){

        echo $name . $email . $password . $linkedin . $address;
        }
        

    }
}

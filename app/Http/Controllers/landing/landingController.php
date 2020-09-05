<?php

namespace App\Http\Controllers\landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Validator;
use App\PasswordReset; 

class landingController extends Controller
{
    public function index($view) {
        if($view == "reset"){
            return view( 'landing.404' );
        }
        if(strpos($view, 'reset-') !== false){
            $token = str_replace("reset-","",$view);
            $passwordReset = PasswordReset::where('token', '=', $token)->first();
                if($passwordReset == null ) {
                    return view('landing.404');
                }
                else{
                    return view( 'landing.reset',compact('passwordReset'));
                }
        }
        return (view()->exists( 'landing.'.$view)) ? view( 'landing.'.$view) : view( 'landing.404' );
    }

    public function store_contact(Request $request)
    {
            //Validation
            $validator = Validator::make($request->all(), [
                'name' =>  'required',
                    'email'  =>  'required|email',
                    'pnumber'  =>  'required',
                    'message'  =>  'required'
            ],
            [],
            [
                'name' =>  'Name',
                'email'  =>  'Email',
                'pnumber'  =>  'Phone number',
                'message'  =>  'Message'
            ]);

            if ($validator->fails()) {
                $Messages = '';
                foreach ($validator->errors()->all() as $key => $error) {
                    $Messages = $Messages.($key+1).'.'.$error.'<br>';
                }
                return response()->json( ['errors' => $Messages] );
            }
            
                $data=array(
                    'name' =>  $request->name,
                    'email'  =>  $request->email,
                    'pnumber'  =>  $request->pnumber,
                    'message'  =>  $request->message
                );
                //errors 
                Mail::to(env('ADMINEMAIL'))->send(new SendMail($data));
                return Response()->json(['success'=>true]);

    }
    

    public function store_register(Request $request)
    {
        
            //Validation
            $validator = Validator::make($request->all(), [
                'firstname' =>  'required',
                'lastname' =>  'required',
                'email'  =>  'required|email',
                'password'  =>  'required',
                'password_confirmation'  =>  'required|same:password'
            ],
            [],
            [
                'firstname' =>  'First Name',
                'lastname' =>  'Last Name',
                'email'  =>  'Email'
            ]);

            if ($validator->fails()) {
                $Messages = '';
                foreach ($validator->errors()->all() as $key => $error) {
                    $Messages = $Messages.($key+1).'.'.$error.'<br>';
                }
                return response()->json( ['errors' => $Messages] );
            }
            
            if(Auth::user()){
                return response()->json( ['errors' => 'To register new account logout first' ] );
            }

            $users=User::all();

            foreach($users as $user){
                if($user->email==$request->get('email')){
                    return response()->json( ['errors' => 'Email Already exists' ] );
                }
            }
            //save new user
            $newuser = new User();
            $newuser->fname=$request->get('firstname');
            $newuser->lname=$request->get('lastname');
            $newuser->email=$request->get('email');
            $newuser->password=bcrypt($request->get('password'));
            $newuser->save();
            
            
            Auth::login($newuser);
            
            return Response()->json(['success'=>true]);

    }


    

}

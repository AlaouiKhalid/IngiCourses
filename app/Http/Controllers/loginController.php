<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Session;
use App\User;
use App\PasswordReset;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendReset;
 

class loginController extends Controller
{
    public function index(){
		if (Auth::check()) {
            return redirect()->route('adminPanel');
		}

    	return view('landing.login');
    }

    function checklogin(Request $request){

    	$this->validate($request,[
    		'email'		=>  'required|email',
    		'password' 	=>	'required|min:3'

    	]);

    	$user_data = array(
    		'email' => $request->get('email'),
    		'password' => $request->get('password')
    	);

    	if(Auth::attempt($user_data)){

    		return response()->json(['status' => 'true','userName' => isset(Auth::user()->name) ? Auth::user()->name : 'Admin']);

    	}else{

    		return response()->json(['status' => 'false']);
    	}
    }

    function logout(){

		Auth::logout();
		Session::flush();
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header('Content-Type: text/html');
		// redirect()->route('/home')
    	return redirect('/home');
	}

	public function validatePasswordRequest(Request $request){
		
		$user = User::where('email', '=', $request->email)->first();
		
		if (!$user) {
		return Response()->json(['errors'=>'User does not exist']);
		}
		
		$newToken=new PasswordReset();
		$newToken->email=$request->email;
		$newToken->token=Str::random(60);
		$newToken->save();
		
		if ($this->sendResetEmail($request->email, $newToken->token)) {

			return Response()->json(['success'=>true]);

		} else {
			return Response()->json(['errors'=>'A Network Error occurred. Please try again.']);
		}
	}

	private function sendResetEmail($email, $token){
		$user = User::where('email', $email)->first();
		//Generate, the password reset link. The token generated is embedded in the link
		$link = url('/') . '/reset-' . $token ;
			try {
			$data=array(
				'link' =>  $link
			);
			Mail::to($email)->send(new SendReset($data));
				return true;
			} catch (\Exception $e) {
				return false;
			}
	}
	
	public function resetPassword(Request $request){
			//Validate input
			$validator = Validator::make($request->all(), [
				'email' => 'required',
				'password' => 'required',
				'passwordconfirm'=> 'required',
				'token' => 'required' ]
			);
			
			if ($validator->fails()) {
				$Messages = '';
				foreach ($validator->errors()->all() as $key => $error) {
					$Messages = $Messages.($key+1).'.'.$error.'<br>';
				}
				return response()->json( ['errors' => $Messages] );
			}

			if($request->password!=$request->passwordconfirm){
				return response()->json( ['errors' => 'Data not valid'] );

			}else{
				
				$password = $request->password;
				// Validate the token
				$tokenData = PasswordReset::where('token', $request->token)->where('email', $request->email)->first();
				// Redirect the user back to the password reset request form if the token is invalid
				if (!$tokenData){
					return response()->json( ['errors' => 'Data not valid'] );
					
				} 

				$user = User::where('email', $tokenData->email)->first();
				// Redirect the user back if the email is invalid
				if (!$user) {
					return response()->json( ['errors' => 'User not found'] );
				}

				$user->password = bcrypt($password);
				$user->update(); //or $user->save();

				//login the user immediately they change password successfully
				//Auth::login($user);

				//Delete the token
				PasswordReset::where('email', $user->email)->delete();
				return Response()->json(['success'=>true]);
				
				//Send Email Reset Success Email

			}

			
			

	}
}


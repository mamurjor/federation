<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\Cast;
use App\Models\Role;
use App\Models\User;
use App\Models\Roles;
use App\Models\Gender;
use App\Models\Tehsil;
use App\Models\Country;
use App\Models\District;
use App\Models\Profession;
use Illuminate\Support\Str;
use App\Mail\VerifyUserMail;
use Illuminate\Http\Request;
use App\Mail\PasswordResetMail;
use App\Events\NewUserRegistered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Password;
  // use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class AuthController extends Controller
{
      // use SendsPasswordResetEmails;
      /**
     * User register page show
     *
     * @method GET
     * @return Illuminate\Http\Request Response
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('login');
        }

        $countries   = Country::all();
        $cast        = Cast::all();
        $genders     = Gender::all();
        $professions = Profession::all();
        $districts   = District::all();
        $tehsils     = Tehsil::all();


        $this->setPageTitle('Register');
        return view('auth.register',compact('countries','cast','genders','professions','districts','tehsils'));
    }

          /**
     * User register page show
     *
     * @method POST
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Request Response
     */
    public function store(Request $request)
    {
          //    dd($request->all());
        $request->validate([
            'cnic_no'               => 'required|unique:users,cnic_no',
            'fname'                 => 'required',
            'mname'                 => 'required',
            'lname'                 => 'required',
            'district'              => 'required',
            'tehsil'                => 'required',
            'gender'                => 'required',
            'cast'                  => 'required',
            'profession'            => 'required',
            'country_residence'     => 'required',
            'address_one'           => 'required',
            'address_two'           => 'required',
            'your_city'             => 'required',
            'phone'                 => 'required',
            'email'                 => 'required|unique:users,email',
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required',
                // 'agree'                 => 'required|accepted',
            'phone' => 'required|unique:users,phone',
        ]);

        $role        = Role::where('slug','client')->first();
        $verify_code = Str::random(64);
        $user        = User::create([
            'role_id'           => $role->id,
            'cnic_no'           => $request->cnic_no,
            'fname'             => $request->fname,
            'mname'             => $request->mname,
            'lname'             => $request->lname,
            'district'          => $request->district,
            'tehsil'            => $request->tehsil,
            'cast'              => $request->cast,
            'gender'            => $request->gender,
            'profession'        => $request->profession,
            'country_residence' => $request->country_residence,
            'address_one'       => $request->address_one,
            'address_two'       => $request->address_two,
            'city'              => $request->your_city,
            'phone'             => $request->phone,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
            'phone'             => $request->phone,
            'verify_code'       => $verify_code,
            'status'            => 2,
        ]);

              // dd($save);
        
        $request['roleName']     = $role->name;
        $request['full_name']    = $request->fname . ' ' . $request->lname;
        $request['button_url']   = URL::temporarySignedRoute('verify.code',  Carbon::now()->addMinutes(60), ['token' =>$verify_code]);
        $request['button_title'] = 'Click Here To Verify Email';
        
              // User mail
        $subject  = emailSubjectTemplate('NEW_USER_MAIL', $request);
        $body     = emailBodyTemplate('NEW_USER_MAIL', $request);
        $heading  = emailHeadingTemplate('NEW_USER_MAIL', $request);
        $userMail = ['subject' => $subject, 'body' => $body, 'heading' => $heading];
        Mail::to($request->email)->send(new VerifyUserMail($userMail));
        Auth::login($user, true);
        
        event(new NewUserRegistered($user));

        return redirect()->route('login')->with('success', 'Registration Successfull!');
    }


    public function userUpdate(){
        
        $countries   = Country::all();
        $cast        = Cast::all();
        $genders     = Gender::all();
        $professions = Profession::all();
        $districts   = District::all();
        $tehsils     = Tehsil::all();
        $user        = User::where('id', Auth::id())->first();
        return view("auth.user-update",compact('user','countries','cast','genders','professions','districts','tehsils'));
    }



    
    public function updateuser(Request $request)
    {
        $user = Auth::user();


        if ($request->hasFile('userimage')) {
            $image      = $request->file('userimage');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $path       = '/admin/userimage/'.$imageName;
            $image_path = $image->move(public_path('admin/userimage'), $imageName);

            $user = User::find($user->id)->update(
                [
                   
                      // 'cnic_no'           => $request->cnic_no,
                    'fname'        => $request->fname,
                    'mname'        => $request->mname,
                    'lname'        => $request->lname,
                    'district'     => $request->district,
                    'tehsil'       => $request->tehsil,
                    'cast'         => $request->cast,
                    'gender'       => $request->gender,
                    'facebook_url' => $request->facebook_url,
                    'twitter_url'  => $request->twitter_url,
                    'youtube_url'  => $request->youtube_url,
                    'linkedin_url' => $request->linkedin_url,
                    'bio'          => $request->bio,
                    'short_bio'    => $request->short_bio,
                    'profession'   => $request->profession,
                    'country'      => $request->country_residence,
                    'address_one'  => $request->address_one,
                    'address_two'  => $request->address_two,
                    'city'         => $request->your_city,
                    'phone'        => $request->phone,
                    'email'        => $request->email,
                      // 'password'          => Hash::make($request->password),
                    'phone'     => $request->phone,
                    'userimage' => $path
                ]
            );
            return redirect()->back()->with('success', 'update Successfully!');

        }
        else{
            
        $user = User::find($user->id)->update(
            [
               
                      // 'cnic_no'           => $request->cnic_no,
                      'fname'        => $request->fname,
                      'mname'        => $request->mname,
                      'lname'        => $request->lname,
                      'district'     => $request->district,
                      'tehsil'       => $request->tehsil,
                      'cast'         => $request->cast,
                      'gender'       => $request->gender,
                      'facebook_url' => $request->facebook_url,
                      'twitter_url'  => $request->twitter_url,
                      'youtube_url'  => $request->youtube_url,
                      'linkedin_url' => $request->linkedin_url,
                      'bio'          => $request->bio,
                      'short_bio'    => $request->short_bio,
                      'profession'   => $request->profession,
                      'country'      => $request->country_residence,
                      'address_one'  => $request->address_one,
                      'address_two'  => $request->address_two,
                      'city'         => $request->your_city,
                      'phone'        => $request->phone,
                      'email'        => $request->email,
                        // 'password'          => Hash::make($request->password),
                      'phone'     => $request->phone,
            ]
        );
        return redirect()->back()->with('success', 'update Successfull!');
        }

       
    }
          /**
     * Forgot password create
     *
     * @param \App\Models\User $token
     * @return \Illuminate\Http\Response
     */
    public function forgotPassword(){
        $this->setPageTitle('Forgot Password');
        return view('auth.reset-password');
    }
           /**
     * Client password reset email sent
     *
     * @method POST
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Request Response
     */
    public function forgotPasswordSent(Request $request){

        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            session()->flash('error', 'Failed! email is not registered.');
            return back();
        }

        $verify_code         = Str::random(60);
        $user['verify_code'] = $verify_code;
        $user->save();

        $request['full_name']          = $user->fname.' '.$user->lname;
        $request['button_reset_url']   = URL::temporarySignedRoute('forgot.password.token', now()->addHours(1), ['token' => $verify_code]);
        $request['button_url']         = URL::temporarySignedRoute('forgot.password.token', now()->addHours(1), ['token' => $verify_code]);
        $request['button_reset_title'] = 'Click Here To Reset Password';

              // // User mail
              // $subject = emailSubjectTemplate('PASSWORD_RESET_MAIL',$request);
              // $body    = emailBodyTemplate('PASSWORD_RESET_MAIL',$request);
              // $heading = emailHeadingTemplate('PASSWORD_RESET_MAIL',$request);

              // $userMail = ['subject' => $subject, 'body' => $body, 'heading' => $heading];
              // Mail::to($user->email)->send(new PasswordResetMail($userMail));
              // return redirect()->back()->with('success', 'Password reset link has been sent to your email');
    }

         /**
     * Forgot password verify
     *
     * @param \App\Models\User $token
     * @return \Illuminate\Http\Response
     */
    public function forgotPasswordToken(Request $request, $verify_token){
        if (! $request->hasValidSignature()) {
            abort(401);
        }
        $user = User::where('verify_code', $verify_token)->first();
        if ($user) {
            $this->setPageTitle('Password Update');
            return view('auth.update-password', compact('user',));
        }
        return redirect()->route('forgot.password')->with('warning', 'Password reset link is expired');
    }
           /**
     * Change password
     * @param request
     * @return response
     */
    public function passwordUpdate(Request $request) {
        $this->validate($request, [
            'email'    => 'required',
            'password' => 'required|min:8|max:20|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (!is_null($user->email_verified_at)) {
                $user['verify_code'] = '';
                $user['password']    = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('login')->with('success', 'Your password has been changed.');
            }
            else{
                session()->flash('error', 'Please! verify your email.');
            }
        }
        else{
            session()->flash('error', 'Something went wrong.');
        }
        return back();
    }


    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

     public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);


        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    :  back()->withErrors(['email' => __($status)]);
    }
    

          // public function logout(){
          //     //  session_destroy();
          //     Auth::logout();
          //     return redirect()->route('index')->with('success', 'Logout Successfully Done.');

          // }





    
}

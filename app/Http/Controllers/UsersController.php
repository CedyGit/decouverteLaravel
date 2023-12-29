<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employe;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    //login and Registration
    public function login()
    {
        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:15'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password))
            { 
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail', 'Votre mots de passe est incorrect');
            }
        }
        
        else{
            return back()->with('fail','Verifier votre Email');
        }
        
    }
    // redirect after login
    // users RH
    public function dashboard()
    {
        return view('dashboard');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function registerUser(Request $request)
    {
       $request->validate([
        'nom'           =>'required',
        'prenom'        =>'required',
        'phone'         =>'required',
        'address'       =>'required',
        'email'         =>'required|email|unique:users',
        'usertype'      =>'required',
        'password'      =>'required|unique:users|min:8|max:15',
        'photo'         =>'required|mimes:jpg,png,jpeg|max:5000'
       ]);

    //upload file
       if($request->hasFile('photo')){

        $photo = $request->file('photo');
        $newPhotoName = time().'.'.$photo->getClientOriginalExtension();
        $destination = public_path('/upload');
        $photo->move($destination, $newPhotoName);


    }else{
        dd('erreur');
    }


       $user = new User();
       $user->nom           = $request->nom;
       $user->prenom        = $request->prenom;
       $user->phone         = $request->phone;
       $user->address       = $request->address;
       $user->email         = $request->email;
       $user->usertype      = $request->usertype;
       $user->password      = Hash::make($request->password);
       $user->photo         = $newPhotoName;

       $resultat = $user->save();
       if($resultat)
       {
        return back()->with('success', 'utilisateur bien enregitré');

       }else
       {
            return back()->with('fail', 'Vos données ne passe pas');
       }
    }

    // logout
    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }

    // redirect Admin
    public function home()
    {
        return view('admin.home');
    }

    // Users Page (tableau and all users in Rh authentification)
    public function usersP()
    {
        return view('user');
    }
    // table of all users
    public function tableUser()
    {
        $data = User::paginate(5);
        return view('user', compact('data'));
    }

    // editPage
    public function editPage($id)
    {
        $user = User::find($id);
        return view('editUser', compact('user'));
    }
    // update User  
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        $user->nom          =$request->input('nom');
        $user->prenom       =$request->input('prenom');
        $user->phone        =$request->input('phone');
        $user->address      =$request->input('address');
        $user->email        =$request->input('email');
        $user->usertype     =$request->input('usertype');
        $user->password     =Hash::make($request->input('password'));

        $resultat = $user->save();
        if($resultat){
            return back()->with('success', 'Les donnees de '.$user->nom.' sont modifier');
        }else{
            return back()->with('fail', 'Erreur de modification');
        }
    }

    public function userDetailsPage()
    {
        return view('userDetails');
    }

    public function userDetails($id)
    {
        $user = DB::table('users')->where('id',$id)->get();
        return view('userDetails', compact('user'));
    }

}

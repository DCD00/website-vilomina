<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'foto_profil' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);
    
        // Upload foto profil jika ada
        if ($request->hasFile('foto_profil')) {
            $fotoProfilPath = $request->file('foto_profil')->store('foto_profil');
        }
    
        // Buat user baru
        $user = User::create([
            'name' => $request->input('name'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
    
        // Tambahkan foto profil ke user jika diunggah
        if (isset($fotoProfilPath)) {
            $user->image = $fotoProfilPath;
            $user->save();
        }

        // $validateData = $request->validate([
        //     'name' => 'required|max:255',
        //     'tanggal_lahir' => 'required',
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:8|max:255'
        // ]);

        // password menggunakan metode bcrypt
        // $validateData['password'] = bcrypt($validateData['password']);
        
        // password menggunakan metode hashing
        // $validateData['password'] = hash::make($validateData['password']);

        // User::create($validateData);

        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}

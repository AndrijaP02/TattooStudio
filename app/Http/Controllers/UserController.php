<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Konsultacije;



class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $userEmail = $user->email;
        
        // Dohvatite sve konsultacije za ulogovanog korisnika koje imaju isti email
        $consultations = Konsultacije::where('email', $userEmail)->get();
        
        $user->update(['unread_consultations' => 0]);
        $notifications = $user->unreadNotifications;
        
        $unreadNotificationsCount = $user->unreadNotifications->count();
        $user->unreadNotifications->markAsRead();
        
        $consultations = $user->konsultacije; 
        
        return view('profile', compact('user', 'consultations', 'notifications','unreadNotificationsCount'));
    }
    
    public function index()
    {
        return view('promenaSifre');
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);
        
        $user = Auth::user();
        
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->route('user.profil')->with('error', 'Trenutna lozinka nije ispravna.');
        }
        
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);
        
        return redirect()->route('user.profil')->with('success', 'Lozinka uspešno promenjena.');
    }
}

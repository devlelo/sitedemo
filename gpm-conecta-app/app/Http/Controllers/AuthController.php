<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller {
    public function loginForm() { return view('auth.login'); }
    public function login(Request $request) {
        $credentials=$request->validate(['email'=>['required','email'],'password'=>['required','string']]);
        if (!Auth::attempt($credentials + ['is_active'=>true], $request->boolean('remember'))) return back()->withErrors(['email'=>'Credenciais inválidas ou conta inativa.'])->onlyInput('email');
        $request->session()->regenerate();
        return redirect()->intended(route('portal.dashboard'));
    }
    public function registerForm() { return view('auth.register'); }
    public function register(Request $request) {
        $data=$request->validate([
            'name'=>['required','string','max:120'],'email'=>['required','email','max:190','unique:users,email'],
            'password'=>['required','confirmed','min:10'],'phone'=>['required','string','max:40'],
            'company_name'=>['required','string','max:180'],'nif'=>['required','string','max:40','unique:users,nif'],
            'company_address'=>['required','string','max:255']
        ]);
        $user=User::create($data+['role'=>'customer','is_active'=>true]);
        Auth::login($user); $request->session()->regenerate();
        return redirect()->route('portal.dashboard')->with('success','Conta empresarial criada.');
    }
    public function logout(Request $request) { Auth::logout(); $request->session()->invalidate(); $request->session()->regenerateToken(); return redirect()->route('home'); }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $password = $request->input('password');
        $role = $request->input('role');

        $managerPassword = env('MANAGER_PASSWORD');
        $adminPassword = env('ADMIN_PASSWORD');

        if (!$managerPassword || !$adminPassword) {
            abort(500, "Помилка: не знайдені змінні оточення.");
        }

        if ($role === 'manager' && $password === $managerPassword) {
            return redirect('/manager');
        }

        if ($role === 'admin' && $password === $adminPassword) {
            return redirect('/admin');
        }

        return redirect()->back()->withErrors([
            'password' => 'Невірний пароль',
        ]);
    }
}

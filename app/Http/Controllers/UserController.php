<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'NI' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
                    ]);
    
        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        User::create($validatedData);
    
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required'. $user->NI,
            'role' => 'required' . $user->NI,
            'NI' => 'required|unique:users,NI' . $user->NI,
            'email' => 'required|unique:users,email' . $user->NI,
            'password' => 'required'. $user->NI,
            
        ]);

        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}

?>
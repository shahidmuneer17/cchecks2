<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function storeUser(Request $request)
    {
        $data = $request->validate([
            'user_name' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'phone_number_1' => 'required|string|max:255',
            'phone_number_2' => 'nullable|string|max:255',
            'account_number' => 'nullable|string|max:255',
            'password' => 'required|string|min:8',
            'ask_change' => 'nullable',
            'address' => 'nullable|string|max:255',
            'address_2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'in_active_note' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        
        $user = new User();
        $user->user_name = $data['user_name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->full_name = $data['full_name'];
        $user->phone_number_1 = $data['phone_number_1'];
        $user->phone_number_2 = $data['phone_number_2'];
        $user->account_number = $data['account_number'];
        $user->ask_change = $data['ask_change'];
        $user->address = $data['address'];
        $user->address_2 = $data['address_2'];
        $user->city = $data['city'];
        $user->state = $data['state'];
        $user->zip_code = $data['zip_code'];
        $user->notes = $data['notes'];
        $user->status = $data['status'];
        $user->in_active_note = $data['in_active_note'];
        $user->save();

        $permission_user = new PermissionUser();
        $permission_user->user_id = $user->id;
        $permission_user->cashchacks = $request->cashchacks ? 1 : 0;
        $permission_user->changestatus = $request->changestatus ? 1 : 0;
        $permission_user->envios = $request->envios ? 1 : 0;
        $permission_user->cancelenvios = $request->cancelenvios ? 1 : 0;
        $permission_user->paybouncedcheck = $request->paybouncedcheck ? 1 : 0;
        $permission_user->intertransaction = $request->intertransaction ? 1 : 0;
        $permission_user->follow_up = $request->follow_up ? 1 : 0;
        $permission_user->end_of_day = $request->end_of_day ? 1 : 0;
        $permission_user->tsCustomers_changestatus = $request->tsCustomers_changestatus ? 1 : 0;
        $permission_user->tsCustomers_newcustomer = $request->tsCustomers_newcustomer ? 1 : 0;
        $permission_user->tsPayers_activatepayer = $request->tsPayers_activatepayer ? 1 : 0;
        $permission_user->tsPayers_changestatus = $request->tsPayers_changestatus ? 1 : 0;
        $permission_user->tsPayers_newpayer = $request->tsPayers_newpayer ? 1 : 0;
        $permission_user->permissions = $request->permissions ? 1 : 0;
        $permission_user->newUser = $request->newUser ? 1 : 0;
        $permission_user->fees = $request->fees ? 1 : 0;
        $permission_user->agents = $request->agents ? 1 : 0;
        $permission_user->save();
        
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

}

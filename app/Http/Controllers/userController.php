<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\PermissionRoleModel;

use Illuminate\Support\Facades\Auth;

class userController extends Controller
{

                function user() {
                    $PermissionUser =  PermissionRoleModel::getPermission('user', Auth::user()->role_id);
                    if (empty($PermissionUser)) {
                       
                        abort(403, 'You do not have the  permissions to access this resource Users.');
                    }
                    $data['PermissionAdd'] = PermissionRoleModel::getPermission('Add user', Auth::user()->role_id);
                    $data['PermissionEdit'] = PermissionRoleModel::getPermission('Edit user', Auth::user()->role_id);
                    $data['PermissionDelete'] = PermissionRoleModel::getPermission('Delete user', Auth::user()->role_id);

                    $data['getRecord'] = User::getRecord();
                    
                    return view('Users.user',$data);
                    }

                    public function Add(){
                        $PermissionUser =  PermissionRoleModel::getPermission('Add user', Auth::user()->role_id);
                        if (empty($PermissionUser)) {
                           
                            abort(403, 'You do not have the  permissions to access Add Users.');
                        }
                    $data['GetRole'] = RoleModel::getRecord();
                    $data['getRecord'] = User::getRecord();
                    return view('Users.Add',$data);
                    }
                    public function edit($id){
                        $PermissionUser =  PermissionRoleModel::getPermission('Edit user', Auth::user()->role_id);
                        if (empty($PermissionUser)) {
                           
                            abort(403, 'You do not have the  permissions to access Edit Users.');
                        }
                        $data['getRecord'] = User::getSingle($id);
                        $data['GetRole'] = RoleModel::getRecord();
                        return view('Users.edit',$data);
                            }


                            public function update($id, Request $request)
                            {
                                $PermissionUser =  PermissionRoleModel::getPermission('Edit user', Auth::user()->role_id);
                                if (empty($PermissionUser)) {
                                   
                                    abort(403, 'You do not have the  permissions to access Update Users.');
                                }
                                // Validate input
                                $request->validate([
                                    'name' => 'required|string|max:255',
                                    'email' => 'required|email|unique:users,email,' . $id, // Allow same email for the current user
                                    
                                  
                                ]);
                            
                                // Fetch the user to update
                                $user = User::findOrFail($id);
                            
                                // Update fields
                                $user->name = trim($request->name);
                                $user->email = trim($request->email);
                                if (!empty($request->password)) {
                                    $user->password = Hash::make($request->password);
                                }
                                $user->role_id = trim($request->role_id);
                            
                                // Save changes
                                $user->save();
                            
                                // Redirect with success message
                                return redirect('/Users/user')->with('success', 'User updated successfully!');
                            }
                            

                    public function insert(Request $request)
                    {
                        $PermissionUser =  PermissionRoleModel::getPermission('Add user', Auth::user()->role_id);
                        if (empty($PermissionUser)) {
                           
                            abort(403, 'You do not have the  permissions to access Add Users.');
                        }
                        // Validate the incoming request
                        $request->validate([
                            'name' => 'required|string|max:255', 
                            'email' => 'required|email|unique:users,email',
                            
                            
                        ]);
                
                        $user = new user;

                        $user->name = trim($request->name);
                        $user->email = trim($request->email);
                        $user->password = Hash::make($request->password);
                        $user->role_id = trim($request->role_id);
                        $user->save();
                
                        
                        return redirect(url('Users/user'))->with('success', 'User added successfully!');
                    }
                    public function delete($id)
                    {
                        $PermissionUser =  PermissionRoleModel::getPermission('delete user', Auth::user()->role_id);
                        if (empty($PermissionUser)) {
                           
                            abort(403, 'You do not have the  permissions to access Delete Users.');
                        }
                        
                        $role = User::find($id);
                    
                        if (!$role) {
                            return redirect(url('/Users/user'))->with('error', 'Role not found.');
                        }
                    
                        $role->delete();
                       
                        return redirect(url('/Users/user'))->with('success', 'You have been Successfully Deleted a User.');
            
                    }
       
}

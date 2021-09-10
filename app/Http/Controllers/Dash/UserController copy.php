<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Auth;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     // echo $user_role_permissions = $user->role()->permissionsByTable('users')->count();
        // $table_permissions = User::permissions();
        // echo '<br>'.$user->role()->name;
        // echo '<br>'.$user->role()->permissions[0]->name;
        // die();
         
    public function index()
    {


        $auth = Auth::user();
        $auth_role_permissions = $auth->role()->permissionsByTable('users');
        $table_permissions = User::permissions();
        $users = User::orderBy('id', 'DESC')->paginate(20);

        $rows = [];
        $other_actions = [];

        foreach ($users as $user) {
            array_push($rows, 
            ['id'=> $user->id,
            'name'=>$user->name,
            'role'=> !empty($user->role()) ? $user->role()->name:'user',
            'email'=>$user->email,
        ]);
        }
        
        // foreach ($auth_role_permissions as $permission) {
        //     if ($permission->name === 'dd')
        //     array_push($other_actions, 
        //     ['title'=> 'dd',
        //     'name'=>'fo',
        //     'route'=>'users.fo',
        // ]);
        // }
      
        $table = [
            'title'=>'users',
            'columns'=> ['id','role','name','email'],
            'rows'=> $rows,
            // 'other_actions' => $other_actions,
            'links' => $users->links('pagination::bootstrap-4')
            ];
            // App::setlocale("ar");

            $tableName = 'users';
        return view('dash.users.index',compact(['table','tableName']));
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $user->roles()->attach(1);
        // $user->roles()->detach(1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        // dd($request);
        echo  $request->route()->getName();
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

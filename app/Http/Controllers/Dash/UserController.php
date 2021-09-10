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


      if (!Auth::user()->role->can('users','red')){
        return response(" You do not have permission", 401);
      }
   
            // pass controller data to livewire crud component 
            $controller = [UserController::class,'methods'=> [
                'red'=> 'users',
                'show'=> 'show'
            ]];

        return view('dash.users.index',compact(['controller']));
    }

    public function users($search)
    {
         $rows = [];
        $users = User::where('name', 'like', '%'.$search.'%')->orderBy('id', 'DESC')->paginate(1);
       
        // foreach (Auth::user()->role->permissionsByTable('users') as $permission) {
        //     echo $permission->name .'<Br>';
               
        //     }
        //     die();
            foreach($users as $user) {
                $rows[] = [
                    'id'=> $user->id,
                    'name'=>$user->name,
                    'role'=> !empty($user->role) ? $user->role->name:'user',
                    'email'=>$user->email,
               ];
               };

            $table = [
                'title'=>'users',
                'columns'=> ['id','role','name','email'],
                //  'columnTypes'=> ['email'=> 'img'],
                'rows'=> $rows,
                'links' => $users->links()
                ];
                return $table;
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'hiw';
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
           
        $user = User::find($id);
         $data = [
            'columns'=> ['name','role','email'],
            // 'columnTypes'=> ['email'=> 'img'],
            'row' => [
                'name'=> $user->name,
                'role'=>  !empty($user->role) ? $user->role->name:'user',
                'email'=> $user->email,
            ],
         ];

         return $data;
        
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

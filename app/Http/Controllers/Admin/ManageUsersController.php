<?php

namespace App\Http\Controllers\Admin;

use App\Firm;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ManageUsersController extends AdminBaseController
{

    public function __construct() {
        parent::__construct();
        $this->pageTitle = __('app.menu.users');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index', $this->data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','id');
        return view('admin.users.create',$this->data)->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array('name' => 'required', 'password' => 'required','email' => 'required|unique:users,email');
        $validator = Validator::make(Input::all(), $rules);

        // Validate the input and return correct response
        if ($validator->fails())
        {
            return response()->json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 422); // 400 being the HTTP code for an invalid request.
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $user->assignRole($request->user_role);
        Session::flash('success','User has been created!');
        return response()->json(array('success' => true,'redirect' => route('admin.users.index')), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = User::find($id);
//        $firm = Firm::where('user_id',$user->id)->destroy();
        User::destroy($id);

        if ($user->id == 1) {
            return response()->json(array('success' => false,'message'=>__('messages.adminCannotDelete'),'redirect' => route('admin.users.index')), 422);

        }
        return response()->json(array('status' => 'success','message'=>__('messages.userDeleted'),'redirect' => route('admin.users.index')), 200);
    }

    public function data()
    {
        $users = User::join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')
            ->join('roles', 'roles.id', '=', 'model_has_roles.role_id')
            ->select('users.id', 'users.name', 'users.email', 'users.created_at')
            ->get();


        return Datatables::of($users)
            ->addColumn('role', function ($user) {
                if ($user->id != 1) {

                    $roleRow=$user->getRoleNames()->implode('name', ', ');
                    return $roleRow;
                }
                else{
                    return __('messages.roleCannotChange');
                }

            })
            ->addColumn('action', function ($row) {

                if ($row->id != 1) {

                    $result =  '<a href="' . route('admin.users.edit', [$row->id]) . '" class="btn btn-info"
                      data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                      <a href="' . route('admin.users.show', [$row->id]) . '" class="btn btn-success"
                      data-toggle="tooltip" data-original-title="View User Details"><i class="fa fa-search" aria-hidden="true"></i></a>';


                    $result .=' <a href="javascript:;" class="btn btn-danger sa-params"
                data-toggle="tooltip" data-user-id="' . $row->id . '" data-original-title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a> ';

                    return $result;
                }
                else{
                    return __('messages.roleCannotChange');
                }

            })
            ->rawColumns(['action'])
            ->make(true);
    }

}

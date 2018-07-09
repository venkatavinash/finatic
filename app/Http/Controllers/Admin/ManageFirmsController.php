<?php

namespace App\Http\Controllers\Admin;

use App\Firm;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ManageFirmsController extends AdminBaseController
{
    public function __construct() {
        parent::__construct();
        $this->pageTitle = __('app.menu.firms');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.firms.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
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
        //
    }

    public function data()
    {
        $firms = Firm::join('users', 'firms.user_id', '=', 'users.id')->join('model_has_roles', 'model_has_roles.model_id', '=', 'users.id')->where('role_id','3')->get();

        return Datatables::of($firms)

            ->addColumn('action', function ($row) {

                if ($row->id != 1) {

                    $result =  '<a href="' . route('admin.users.edit', [$row->id]) . '" class="btn btn-info"
                      data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                      <a href="' . route('admin.users.show', [$row->id]) . '" class="btn btn-success"
                      data-toggle="tooltip" data-original-title="View Firm Details"><i class="fa fa-search" aria-hidden="true"></i></a>';


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

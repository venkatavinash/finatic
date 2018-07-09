<?php

namespace App\Http\Controllers\Firm;


use App\Firm;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FirmBasedataController extends FirmBaseController
{

    public function __construct() {
        parent::__construct();
        $this->pageTitle = __("app.menu.dashboard");

//        if(!ModuleSetting::FirmModule('dashboard')){
//            abort(403);
//        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->firm = Firm::where('user_id',auth()->user()->id)->first();
        return view('firm.profile.basedata', $this->data);
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

        $request->validate([
            'title' => 'required',
            'firstname' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'companymail' => 'required',
            'phone' => 'required|min:8',
            'postcode' => 'required|digits:5',
            'premium_account' => 'required|digits:8',
            'tax_number' => ['required','regex:/^([0-9]{7})[$&+,:;=?@#|<>.*()%!-]{1}$/']
        ]);


        $firm = Firm::findorFail($id);
        $firm->update($request->all());
        $firm->status = 1;
        $firm->save();
        Session::flash('basedata-updated','Base data has been created successfully!');
        return redirect()->route('firm.dashboard');
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

    public function basedataVerify()
    {

    }
}

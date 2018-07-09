@extends('layouts.firmapp')

@section('content')

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-8">
            {!! Form::model($firm,['method'=>'PATCH', 'action'=>['Firm\FirmBasedataController@update',$firm->id],'class'=>'form-group']) !!}

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-body">
                <div class="form-group row">
                    {!! Form::label('title', trans('app.title'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('title', null,['placeholder'=>trans('app.mrMrsCompany'),'class' => 'form-control']) !!}

                    </div>
                </div>


                <div class="form-group row">
                    {!! Form::label('firstname', trans('app.firstName'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('firstname',null, ['class' => 'form-control']) !!}

                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('email', trans('app.email'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::email('email', null,['class' => 'form-control']) !!}

                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('surname', trans('app.surname'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('surname', null,['placeholder'=> 'Surname','class' => 'form-control']) !!}

                    </div>
                </div>

                <h4 style="margin: 2em 0">Company Data</h4>

                <div class="form-group row">
                    {!! Form::label('companyname', trans('app.companyName'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('companyname', null,['placeholder'=> 'Microsoft Inc','class' => 'form-control']) !!}

                    </div>
                </div>


                <div class="form-group row">
                    {!! Form::label('street', trans('app.street'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('street', null,['class' => 'form-control']) !!}

                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('house_number', trans('app.houseNumber'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('house_number', null,['class' => 'form-control']) !!}

                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('postcode', trans('app.postcode'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('postcode', null,['class' => 'form-control']) !!}

                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('place', trans('app.place'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('place', null,['class' => 'form-control']) !!}

                    </div>
                </div>

                <h4 style="margin: 2em 0">Contact Data</h4>
                <div class="form-group row">
                    {!! Form::label('companymail', trans('app.email'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('companymail', null,['class' => 'form-control']) !!}

                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('phone', trans('app.phone'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('phone', null,['class' => 'form-control']) !!}

                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('fax', trans('app.fax'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('fax', null,['class' => 'form-control']) !!}

                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('mobile', trans('app.mobile'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('mobile', null,['class' => 'form-control']) !!}

                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('web', trans('app.web'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                    <div class="col-sm-10">
                        {!! Form::text('web', null,['class' => 'form-control']) !!}

                    </div>
                </div>




                <h4 style="margin: 2em 0">Company Presettings</h4>

                <div class="form-group row">
                    {{--<label class="col-sm-2 col-form-label">@lang('app.role')</label>--}}
                    {!! Form::label('country', trans('app.country'),[ 'class' => 'col-sm-3 col-form-label', ]) !!}

                    <div class="col-sm-8">
                        {!! Form::select('country', ['Österreich'=>'Österreich'], null, ['class' => 'form-control']) !!}


                    </div>
                </div>
                <div class="form-group row">
                    {{--<label class="col-sm-2 col-form-label">@lang('app.role')</label>--}}
                    {!! Form::label('region', trans('app.region'),[ 'class' => 'col-sm-3 col-form-label', ]) !!}

                    <div class="col-sm-8">
                        {!! Form::select('region', ['Wien'=>'Wien',
                                                'Niederösterreich' => 'Niederösterreich',
                                                'Salzburg' => 'Salzburg',
                                                'Burgenland' => 'Burgenland',
                                                'Oberösterreich' => 'Oberösterreich',
                                                'Steiermark' => 'Steiermark',
                                                'Vorarlberg' => 'Vorarlberg',
                                                'Kärnten' => 'Kärnten',
                                                'Tirol' => 'Tirol'], null, ['class' => 'form-control']) !!}


                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('premium_account', trans('app.premiumAccount'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                    <div class="col-sm-8">
                        {!! Form::text('premium_account', null,['class' => 'form-control']) !!}

                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('tax_number', trans('app.taxNumber'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                    <div class="col-sm-8">
                        {!! Form::text('tax_number', null,['class' => 'form-control']) !!}

                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('uid_taxnumber', trans('app.uidTaxnumber'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                    <div class="col-sm-8">
                        {!! Form::text('uid_taxnumber', null,['class' => 'form-control']) !!}

                    </div>
                </div>

                <div class="form-group row">
                    {!! Form::label('place', trans('app.place'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                    <div class="col-sm-8">
                        {!! Form::text('place', null,['class' => 'form-control']) !!}

                    </div>
                </div>
                <div class="form-group row">
                    {{--<label class="col-sm-2 col-form-label">@lang('app.role')</label>--}}
                    {!! Form::label('region_finance_office', trans('app.regionFinanceOffice'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                    <div class="col-sm-8">
                        {!! Form::select('region_finance_office', ['Wien'=>'Wien',
                                                'Niederösterreich' => 'Niederösterreich',
                                                'Salzburg' => 'Salzburg',
                                                'Burgenland' => 'Burgenland',
                                                'Oberösterreich' => 'Oberösterreich',
                                                'Steiermark' => 'Steiermark',
                                                'Vorarlberg' => 'Vorarlberg',
                                                'Kärnten' => 'Kärnten',
                                                'Tirol' => 'Tirol'], null, ['class' => 'form-control']) !!}


                    </div>
                </div>

                <div class="form-group row">
                    {{--<label class="col-sm-2 col-form-label">@lang('app.role')</label>--}}
                    {!! Form::label('finance_office', trans('app.financeOffice'),[ 'class' => 'col-sm-4 col-form-label', ]) !!}

                    <div class="col-sm-8">
                        {!! Form::select('finance_office', ['Wien'=>[
                                                'Finanzamt Wien 12/13/14 Purkersdorf (FA08)' => 'Finanzamt Wien 12/13/14 Purkersdorf (FA08)',
                                                'Finanzamt Wien 1/23 (FA09)' => 'Finanzamt Wien 1/23 (FA09)',
                                                'Finanzamt Wien 2/20/21/22 (FA12)' => 'Finanzamt Wien 2/20/21/22 (FA12)',
                                                'Finanzamt Wien 3/6/7/11/15 Schwechat Gerasdorf (FA03)' => 'Finanzamt Wien 3/6/7/11/15 Schwechat Gerasdorf (FA03)',
                                                'Finanzamt Wien 4/5/10 (FA04)' => 'Finanzamt Wien 4/5/10 (FA04)',
                                                'Finanzamt Wien 8/16/17 (FA06)' => 'Finanzamt Wien 8/16/17 (FA06)',
                                                'Finanzamt Wien 9/18/19 Klosterneuburg (FA07)' => 'Finanzamt Wien 9/18/19 Klosterneuburg (FA07)',
                                                'Finanzamt für Gebühren, Verkehrsteuern und Glücksspiel (FA10)' => 'Finanzamt für Gebühren, Verkehrsteuern und Glücksspiel (FA10)']], null, ['class' => 'form-control']) !!}


                    </div>
                </div>


            </div>
            <div class="form-actions">
                <button type="submit" id="save-form" class="btn btn-success"> <i class="fa fa-check"></i> @lang('app.save')</button>
                <button type="reset" class="btn btn-default">@lang('app.reset')</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    </div>



@endsection


@push('footer-script')
    <!-- fox_admin dashboard demo (This is only for demo purposes) -->
    <script src="/js/pages/dashboard.js"></script>
    <script>

        @if (Session::has('basedata-updated'))
        $.toast({
            heading: 'Success',
            text: '{{Session::get('basedata-updated')}}',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
        @endif

    </script>


@endpush
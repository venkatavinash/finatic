@extends('layouts.app')

@section('page-title')

    <section class="content-header">
        <h1>
            {{ $pageTitle }}
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
    </section>
@endsection

@push('head-script')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
@endpush

@section('content')





    <div class="row">
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Create User</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">

                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissable hidden " id="form-errors">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            </div>
                            {!! Form::open(['id'=>'createUser','class'=>'ajax','method'=>'POST']) !!}
                            <div class="form-body">
                                <div class="form-group row">
                                    {!! Form::label('item', trans('app.name'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                    <div class="col-sm-10">
                                        {!! Form::text('name', null,['class' => 'form-control']) !!}

                                    </div>
                                </div>
                                <div class="form-group row">
                                    {{--<label class="col-sm-2 col-form-label">@lang('app.role')</label>--}}
                                    {!! Form::label('item', trans('app.role'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                    <div class="col-sm-10">
                                        {!! Form::select('user_role', $roles, null, ['class' => 'form-control']) !!}


                                    </div>
                                </div>

                                <div class="form-group row">
                                    {!! Form::label('email', trans('app.email'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                    <div class="col-sm-10">
                                        {!! Form::email('email', null,['class' => 'form-control']) !!}

                                    </div>
                                </div>

                                <div class="form-group row">
                                    {!! Form::label('password', trans('app.password'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                    <div class="col-sm-10">
                                        {!! Form::password('password', ['class' => 'form-control']) !!}

                                    </div>
                                </div>
                                <div class="form-group row">
                                    {!! Form::label('title', trans('app.surname'),[ 'class' => 'col-sm-2 col-form-label', ]) !!}

                                    <div class="col-sm-2">
                                        {!! Form::text('title', null,['class' => 'form-control']) !!}

                                    </div>
                                    <div class="col-sm-8">
                                        {!! Form::text('surname', null,['placeholder'=> 'Surname','class' => 'form-control']) !!}

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
            </div>
        </div>
    </div>
    <!-- .row -->
@endsection




@push('footer-script')

    <script>
        $(document).ready(function(){
            $("#createUser").focus(function(){
                $("#form-errors").hide();
            });

            $('#save-form').click(function (e) {
                e.preventDefault(e);

                $.ajax({
                    url: '{{route('admin.users.store')}}',
                    container: '#createUser',
                    type: "POST",
                    redirect: true,
                    data: $('#createUser').serialize(),
                    success: function (data) {
                        console.log(data);
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        }
                    },
                    error: function (data) {
                        if (data.status === 422) {
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors.errors, function (key, val) {
                                $("#form-errors").append(val[0] + '</br>');
                            });
                            $("#form-errors").show();
                        }
                    }
                })
            });
        });




    </script>

@endpush
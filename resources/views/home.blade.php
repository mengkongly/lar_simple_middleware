@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="panel-body">
                    <pre>
                        {{var_dump($session)}}
                    </pre>                 
                </div>
                <div class="panel-body">
                    <a href="/home/delete-session" class="btn btn-info">Delete Session</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="row">
                     <div class="col-6">
                         <a href="{{route('showForm')}}">New Post</a>
                     </div>
                     <div class="col-6">
                         <a href="{{route('showPost')}}">All Post</a>
                     </div>
                 </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status')}}
                        </div>
                    @endif
                    <p>ID:{{Auth::user()->id}}</p>
                    <p>NAME: {{Auth::user()->name}}</p>
                    <p>EMAIL: {{Auth::user()->email}}</p>
                    <p>PHONE: {{Auth::user()->profile->phone}}</p>
                    <p>ADDRESS: {{Auth::user()->profile->address}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

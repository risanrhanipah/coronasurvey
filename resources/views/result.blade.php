@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col offset-md-1">
            <div class="card text-center">
                <div class="card-header">
                    Hasil
                  </div>
                <div class="card-body">
                    <h2 class="card-title">{{$name}}</h2> <hr>
                    <h4 class="card-text">Kamu memiliki {{$msg}} untuk tertular virus corona</h4>
                    <a href="/" class="btn btn-primary">Selesai.</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
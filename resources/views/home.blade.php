@extends('layouts.appbackup')

@section('content')
<form action="/setor" method="POST"> 
    @csrf
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <h5 class="card-header">Masukan Nama</h5>
                    <div class="card-body">
                      <div class="card-title"><input type="text" name="name" id=""> <br>
                    </div>
                      <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                  </div>
            </div>
        </div>
    </div>
</form>
@endsection
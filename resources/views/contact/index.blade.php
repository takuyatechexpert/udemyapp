@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="GET" action="{{ route('contact.create')}}">
                      <input type="submit" value="新規登録" class="btn btn-info">
                    </form>
                    indexです！
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

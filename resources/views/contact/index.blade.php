@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                    <br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">氏名</th>
                          <th scope="col">件名</th>
                          <th scope="col">登録日時</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                          <td>{{$contact->id}}</td>
                          <td>{{$contact->your_name}}</td>
                          <td>{{$contact->title}}</td>
                          <td>{{$contact->created_at}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

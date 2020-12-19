@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-primary mb-2" href="/showmemorandum">Back</a>
    <h6>Memorandum ID: {{$memorandum['id']}}</h6>
    <h1>{{$memorandum['memo_name']}}</h2>
    <hr>
    <h5>From: {{$memorandum['memo_origin']}}</h5>
    <h6>Date Created: {{$memorandum['date_created']}}</h6>
    <h6>Date Recieved: {{$memorandum['date_recieved']}}</h6>
    <img class="card-img-top border" src="{{ url('storage/memoimage/'.$memorandum->memo_digital_file) }}" alt="Card image cap">
</div>
@endsection
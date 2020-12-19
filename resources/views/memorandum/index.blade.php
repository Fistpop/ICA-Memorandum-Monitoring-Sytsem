@extends('layouts.app')

@section('content')
<div class="container-fluid">
        @foreach($category as $category)
            <h2 class="text-center" type="button" data-toggle="collapse" data-target="#{{$category->cat_name}}" aria-expanded="false" aria-controls="{{$category->cat_name}}">{{$category->cat_name}}</h2>
            <div class="row justify-content-center collapse in show" id="{{$category->cat_name}}">
                @foreach($memorandum as $memo)
                    @if($memo->cat_id==$category->id)
                        <div class="card col-xl-2 col-lg-3 col-md-5 col-sm-6 col-12 mx-4 mb-4 px-0" style="width: 18rem;">
                            <img style="height: 20rem;"class="card-img-top border px-2 py-2" src="{{ url('storage/memoimage/'.$memo->memo_digital_file) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$memo['memo_name']}}</h5>
                                <p class="card-text">{{$memo['memo_origin']}}</p>
                                <p class="card-text">Date uploaded: {{$memo['created_at']}}</p>
                                <form method="GET" action="{{'showmemo/'.$memo->id}}">
                                    <input type="hidden" id="id" name="id" value="{{$memo['id']}}">
                                    <input type="submit" class="btn btn-primary" value="View"></button>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <hr>
        @endforeach  
@endsection
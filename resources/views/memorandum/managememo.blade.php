@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="{{'/creatememo'}}">Create</a>
    <table class="table-responsive table-striped">
        <thead>
            <tr>
                <th class="px-2 py-2">ID</th>
                <th class="px-2 py-2">Memo name</th>
                <th class="px-2 py-2">Memo Origin</th>
                <th class="px-2 py-2">Date created</th>
                <th class="px-2 py-2">Date recieved</th>
                <th class="px-2 py-2">Category</th>
                <th class="px-2 py-2">Uploaded at</th>
                <th class="px-2 py-2">Image</th>
                <th class="px-2 py-2">Show</th>
                <th class="px-2 py-2">Edit</th>
                <th class="px-2 py-2">Deleted</th>
            </tr>
        </thead>
        <tbody>
        @foreach($memorandum as $memo)
            <tr>
                
                <td class="px-2 py-2">{{$memo['id']}}</td>
                <td class="px-2 py-2">{{$memo['memo_name']}}</td>
                <td class="px-2 py-2">{{$memo['memo_origin']}}</td>
                <td class="px-2 py-2">{{$memo['date_created']}}</td>
                <td class="px-2 py-2">{{$memo['date_recieved']}}</td>
                @if($memo->cat_id==1)
                    <td class="px-2 py-2">{{$category[0]['cat_name']}}</td>
                @endif
                @if($memo->cat_id==2)
                    <td class="px-2 py-2">{{$category[1]['cat_name']}}</td>
                @endif
                @if($memo->cat_id==3)
                    <td class="px-2 py-2">{{$category[2]['cat_name']}}</td>
                @endif
                <td class="px-2 py-2">{{$memo['created_at']}}</td>
                <td class="px-2 py-2">
                    <img class="border" style="height: 10rem;width: 10rem;"class="card-img-top border" src="{{ url('storage/memoimage/'.$memo->memo_digital_file) }}"></th>
                </td>
                <td><a class="btn btn-primary" href="{{'showmemo/'.$memo->id}}">show</td>
                <td><a class="btn btn-warning w-100" href="{{'editmemorandum/'. $memo->id}}">Edit</td>
                <td><a class="btn btn-danger" href="{{'deletememorandum/'. $memo->id}}">Delete</td>
            </tr> 
        @endforeach
        </tbody>
        </tbody>
    </table>
</div>
@endsection
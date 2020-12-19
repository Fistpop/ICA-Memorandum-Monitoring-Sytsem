@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
        <h1>Edit Memorandum</h1>
        <form method="POST" action="{{'/edit/'.$memorandum->id}}" enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            <div class="form-group w-50 mx-auto">
                <input type="hidden" class="id" name="id" value="{{$memorandum['id']}}}">
            </div>
            <div class="form-group w-50 mx-auto">
                <label  for="memoname">Memorandum Name</label>
                <span>
                    <input type="text" class="form-control" id="memo_name" name="memo_name" value="{{$memorandum['memo_name']}}" required placeholder="">
                <span>
            </div>
            <div class="form-group w-50 mx-auto">
                <label  for="memoorigin">Memorandum Origin</label>
                <span>
                    <input type="text" class="form-control" id="memo_origin" name="memo_origin" value="{{$memorandum['memo_origin']}}" required placeholder="">
                <span>
            </div>
            <div class="form-group w-50 mx-auto">
                <label for="date_created">Date created</label>
                <span>
                    <input type="date" class="form-control" id="date_created" name="date_created" value="{{$memorandum['date_created']}}" required placeholder="">
                </span>
            </div>
            <div class="form-group w-50 mx-auto">
                <label for="date_recieved">Date recieved</label>
                <span>
                    <input type="date" class="form-control" id="date_recieved" name="date_recieved" value="{{$memorandum['date_recieved']}}" required placeholder="">
                </span>
            </div>
            <div class="form-group w-50 mx-auto">
                <label class="d-block"for="category">Category</label>
                <span>
                    <select id="cat_id" name="cat_id" class="form-control">
                        <option value="{{1}}">University</option>
                        <option value="{{2}}">College</option>
                        <option value="{{3}}">Department</option>
                    </select>
                </span>
            </div>
            <div class="form-group w-50 mx-auto">
                <label for="memo_digital_file">Image File</label>
                <span>
                    <input type="file" class="form-control" id="memo_digital_file" name="memo_digital_file" value="{{$memorandum['date_recieved']}}" placeholder="">
                </span>
            </div>
            <div>
                <button type="submit" value="update" class="btn btn-primary">Update</button>
                <a class="btn btn-primary" href="/managememorandum">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
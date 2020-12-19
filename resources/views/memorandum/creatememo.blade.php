@extends('layouts.app')

@section('content')
<div class="container">
    @if(Auth::user()->user_type=="admin")
        <div class="text-center col-md-12 col-sm-12 px-0 py-0">
            <form method="POST" action="creatememorandum" enctype="multipart/form-data">
                @csrf
                <div class="form-group w-50 mx-auto">
                    <label  for="memoname">Memorandum Name</label>
                    <span>
                        <input type="text" class="form-control" id="memo_name" name="memo_name" required placeholder="">
                    <span>
                </div>
                <div class="form-group w-50 mx-auto">
                    <label  for="memoorigin">Memorandum Origin</label>
                    <span>
                        <input type="text" class="form-control" id="memo_origin" name="memo_origin" required placeholder="">
                    <span>
                </div>
                <div class="form-group w-50 mx-auto">
                    <label for="date_created">Date created</label>
                    <span>
                        <input type="date" class="form-control" id="date_created" name="date_created" required placeholder="">
                    </span>
                </div>
                <div class="form-group w-50 mx-auto">
                    <label for="date_recieved">Date recieved</label>
                    <span>
                        <input type="date" class="form-control" id="date_recieved" name="date_recieved" required placeholder="">
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
                        <input type="file" class="form-control" id="memo_digital_file" name="memo_digital_file" required placeholder="">
                    </span>
                </div>
                <div>
                    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    @else
        <h1 class="text-center">No Memorandum Available<h1>
    @endif
</div>
@endsection
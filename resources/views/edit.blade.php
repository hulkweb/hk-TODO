@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-5 p-4 shadow">
            <form action="/todos/{{$todo->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">title</label>
                    <input type="text" name="title" value="{{  $todo->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">description</label>
                    <input type="text" name="description" value="{{  $todo->description }}" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="pending" {{  $todo->status=='pending'?"selected":"" }}  >pending</option>
                        <option value="not completed" {{  $todo->status=='not completed'?"selected":"" }}>not completed</option>
                        <option value="completed" {{  $todo->status=='completed'?"selected":"" }}>completed</option>
                    </select>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">save</button></div>
            </form>
        </div>
    </div>
@endsection

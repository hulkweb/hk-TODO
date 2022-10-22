@extends('layout')
@section('content')
    <div class="row">
        <div class="col-sm-5 p-4 shadow">
            <form action="/todos" method="post">
                @csrf
                <div class="form-group">
                    <label for="">title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">description</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">due date</label>
                    <input type="date" min="{{ date('y-m-d', strtotime('now')) }}" name="due_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="pending">pending</option>
                        <option value="not completed">not completed</option>
                        <option value="completed">completed</option>
                    </select>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-primary">Create</button></div>
            </form>
        </div>
    </div>
@endsection

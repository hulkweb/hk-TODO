@extends('layout')
@section('content')
   <div class="row">
    <div class="col-sm-5 rounded alert-warning p-3">
        <h2 class="p-2">{{$todo->title}}</h2>
        <p class="p-2 text-capitalize">
            {{$todo->description}}
        </p>
        <div class="d-flex justify-content-between">
            <span class="p-2">
                <i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;{{date("d M Y",strtotime($todo->due)) }}
            </span>
            <span class="p-2 badge">
                <i class="fa fa-file" aria-hidden="true"></i> &nbsp;{{$todo->status}}
            </span>
        </div>
    </div>
   </div>
@endsection

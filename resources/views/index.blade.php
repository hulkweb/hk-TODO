@extends('layout')
@section('content')
    <div class="text-left p-2">
        <select name="" id="filter" onchange="getTodo(this.value)">
            <option value="">--select--</option>
            <option value="completed">completed</option>
            <option value="pending">pending</option>
            <option value="not completed">not completed</option>
        </select>
    </div>
    <table class="table table-bordered table-stripped ">
        <thead class="">
            <th>Num</th>
            <th>Title</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Action</th>

        </thead>
        <tbody>
            @foreach ($todos as $i => $item)
                <tr
                    class="{{ (new DateTime('now') > new DateTime($item->due_date)) && ($item->status == 'pending' ||$item->status == 'not completed' ) ? 'alert alert-danger' : 'alert alert-primary' }} ">
                    <th>
                        {{ $i + 1 }}
                    </th>
                    <th>
                        {{ $item->title }}
                    </th>
                    <th>
                        {{ date('d M Y', strtotime($item->due_date)) }}
                    </th>
                    <th>
                        {{ $item->status }}
                    </th>
                    <th>
                        <a href="/todos/{{ $item->id }}" class="btn btn-light btn-sm"><i class="fa fa-eye"
                                aria-hidden="true"></i></a>
                        <a href="{{ new DateTime('now') > new DateTime($item->due_date) ? '#' : "/todos/$item->id/edit" }}"
                            class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <form action="/todos/{{ $item->id }}" method="POST" style="display: inline">
                            @method('DELETE')
                            @csrf
                            <button type="su" class="btn btn-danger btn-sm"><i class="fa fa-trash"
                                    aria-hidden="true"></i></button>
                        </form>
                    </th>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="text-center p-2">{{ $todos->links() }}</div>
    <script>
        function getTodo(val) {
            location.replace("/todos?filter=" + val)
        }
    </script>
@endsection

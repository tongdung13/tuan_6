@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Danh sach Category parent</h1>
            </div>
            <div class="col-6" style="text-align: right; margin-top: 10px;">
                <a href="{{ route('category_parent.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Code</th>
                            <th>Category Id</th>
                            <th>Category name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categoryParent as $key => $category)
                            <tr>
                                <td>{{ $key++ }}</td>
                                <td>{{ $category->code }}</td>
                                <td>
                                    <span class="badge badge-success">{{ $category->category_id }}</span>
                                </td>
                                <td>{{ $category->category_name }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

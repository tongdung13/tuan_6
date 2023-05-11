@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Category Parent</h1>
    </div>
    <hr>
    <form action="{{ route('category_parent.store') }}" method="post" enctype="multipart/form-data" id="from-validator"
        data-toggle="validator">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Create Category Parent</h3>
                        </div>
                        <div class="panel-body add_model_chose ">
                            <div class="mode_chose0">
                                <div class="form-group">
                                    <label for="inputText" class="col-lg-2 control-label">Code</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="code" id="inputText"
                                            placeholder="Enter Code" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputText" class="col-lg-2 control-label">Category Id</label>
                                    <div class="col-lg-10">
                                        <select class="form-control select2" name="category_id[0]" id="inputSelect"
                                            style="height: 38px;" required>
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputText" class="col-lg-2 control-label">Category name</label>
                                    <div class="col-lg-10" id="categoryName">
                                        <input type="text" class="form-control" name="category_name[0]" id="category_name[0]"
                                            placeholder="Enter Category Name" required >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="data[]">
                        <div class="form-group">
                            <div class=" col-sm-11">
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <a class="btn btn-primary add_model_html" style="padding-bottom: 10px;">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-check"></i> Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
    <script type="text/javascript">
        var count_click = 0;
        $(".add_model_html").click(function() {
            add_model_html();
        });

        function add_model_html() {
            count_click++;
            var strString = ''
            strString += '<hr>';
            strString += ' <div class="row panel-body mode_chose' + count_click + '">';
            strString += '<div class="form-group">';
            strString += '<label for="inputText" class="col-lg-2 control-label">Code</label>';
            strString += ' <div class="col-lg-10">';
            strString +=
                '<input type="text" class="form-control" name="code" id="inputText" placeholder="Enter Code" required>';
            strString += '</div>';
            strString += '</div>';
            strString += '<div class="form-group">';
            strString += '<label for="inputText" class="col-lg-2 control-label">Parent Category</label>';
            strString += ' <div class="col-lg-10">';
            strString += '<select class="form-control select2" name="category_id[' + count_click +']" id="inputSelect" required>';
            strString += '     <option value="">Select Category</option>';
            strString += '@foreach ($categories as $category)';
            strString += ' <option value="{{ $category->id }}">{{ $category->name }}</option>';
            strString += '   @endforeach';
            strString += ' </select>';
            strString += '</div>';
            strString += '</div>';
            strString += '<div class="form-group">';
            strString += '<label for="inputText" class="col-lg-2 control-label">Category Name</label>';
            strString += ' <div class="col-lg-10">';
            strString +=
                '<input type="text" class="form-control" name="category_name[' + count_click + ']" placeholder="Enter Category Name" required readonly>';
            strString += '</div>';
            strString += '</div>';
            strString += '</div>';


            $(".add_model_chose").append(strString);
        }
    </script>

    <script>
        var arr = [
            {
                'category_id': '1',
                'category_name': 'hoa mi',
                'code': [1,3,5,8],
            },
            {
                'category_id': '2',
                'category_name': 'Hot trong mua',
                'code': [2,5,9,12]
            }
        ];
        $(document).ready(function () {
            arr = Object.entries(arr);
            for (const or of arr) {
                console.log(or);
            }
        });
    </script>
@endsection

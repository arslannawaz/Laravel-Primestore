@extends('admin.layout.dashboard')

@section('content-head')
    <h3>Category</h3>
@stop

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">ID</th>
                            <th class="column-title">Category Name</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($categories as $category)
                                <tr class="even pointer">
                                    <td class=" ">{{$category->id}}</td>
                                    <td class=" ">{{$category->name}}</td>
                                    <td>
                                        <form action="{{ url('admin/category', $category->id) }}" method="post" class="delete" onsubmit="return confirm('Do you really want to delete?')">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>


            </div>
        </div>
    </div>

@stop
@extends('seller.layout.dashboard')

@section('content-head')
    <h3>Viev Product</h3>
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
                            <th class="column-title">Picture</th>
                            <th class="column-title">Title</th>
                            <th class="column-title">Price</th>
                            <th class="column-title">Status</th>
                            <th colspan="2" class="column-title no-link last"><span class="nobr">Action</span></th>
                        </tr>
                        </thead>

                        <tbody>

                        @foreach($products as $product)
                            <tr class="even pointer">
                                <td class=" ">{{$product->id}}</td>

                            @foreach ($product->pictures as $picture)
                                 <td class=" "><img width="50" src="{{URL::to('/images/',$picture->src)}}"></td>

                                @endforeach

                                <td class=" ">{{$product->title}}</td>
                                <td class=" ">{{$product->price}}</td>
                                <td class=" ">{{$product->status}}</td>

                                <td>
                                    <form action="{{ url('seller/product', $product->id) }}" method="post" class="delete" onsubmit="return confirm('Do you really want to delete?')">
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
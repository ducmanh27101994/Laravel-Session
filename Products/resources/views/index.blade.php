@extends('layout.master')

@section('content')
    <div class="title m-b-md">
        Danh sách sản phẩm
    </div>
    <table>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Desc</td>
            <td>Price</td>
            <td>View_Count</td>
            <td>Action</td>
        </tr>
        @if(empty($products))
            <tr>
                <td>No data</td>
            </tr>
        @else
        @foreach($products as $key => $product)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->desc}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->view_count}}</td>
                <td><a href="{{route('show',$product->id)}}">View</a></td>
            </tr>
            @endforeach

        @endif

    </table>

@endsection

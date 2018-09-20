@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Post List</div>
                    <a href="{{route('products.create')}}" class="btn">Добавить товар</a>
                    <div class="card-body">
                        <table class="table">
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->photo}}</td>
                                    <td>{{$product->text}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
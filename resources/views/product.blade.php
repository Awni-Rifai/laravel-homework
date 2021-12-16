@extends('master-page')
@section('section')
    <div class="container my-5">
<table class="table ">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    @foreach ($productsArr as $product)
    <tbody>

    <tr>
        <th scope="row">1</th>
        <td>{{$product['name']}}</td>
        <td>{{$product['price']}}</td>
        <td>{{$product['weight']}}</td>
    </tr>

    @endforeach
    </tbody>
</table>
    </div>
@endsection




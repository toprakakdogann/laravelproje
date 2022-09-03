<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <h2 class="text-center">
        Ürünler
    </h2>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>ply_id</th>
                <th>commission_rate</th>
                <th>discount_rate</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>currency</th>
                <th>developer_name</th>
                <th>publisher_name</th>
                <th>merchant_id</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->ply_id}}</td>
                <td>{{$product->commission_rate}}</td>
                <td>{{$product->discount_rate}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->currency}}</td>
                <td>{{$product->developer_name}}</td>
                <td>{{$product->publisher_name}}</td>
                <td>{{$product->merchant_id}}</td>
            </tr>
            @endforeach
            </tbody>

        </table>
        {!! $products->links() !!}
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
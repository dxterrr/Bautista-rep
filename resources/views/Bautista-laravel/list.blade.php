<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <header>
        @extends ('Bautista-laravel/layout')

        @section ('title', 'LIST')

        @section( 'content') 
    </header>


    <br>
    <br>
    <div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{url('add')}}" class="btn btn-outline-dark mb-3 justify-content-md-end">Add New</a>
    </div>
    <table class="table table-hover text-center table-info">
      <thead class="table table-dark">
        <tr>
         <th scope="col">Item Id</th>
          <th scope="col">Product</th>
          <th scope="col">Cost</th>
          <th scope="col">Quantity</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      @foreach($products as $product)
            <tr>
            <td>{{$product->id}}</td>

                <td>{{$product->product_name}}</td>
                <td>{{$product->cost}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
            <td>
            <a href="{{ route ('edit', ['id' => $product->id]) }}" class="link-dark"><button type="button" class="btn btn-outline-success">EDIT</button></a>
            <a href="delete/{{$product->id}}" class="link-dark"><button type="button" class="btn btn-outline-danger">Delete</button></a>
            </td>
            @endforeach  

            </tr>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

 

@endsection

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
  @extends ('Bautista-laravel/layout')

@section ('title', 'EDIT')

@section( 'content')
</header>


<form action="{{ route('editsave', $id)}}" method="POST">
    @csrf
<section class="vh-100 gradient-customs">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Edit Product</h3>
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="product_name" class="form-control form-control-lg" value="{{$product_name}}"/>
                    <label class="form-label" for="product_name">Product Name</label>
                  </div>
</div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="integer" name="cost" class="form-control form-control-lg" value="{{$cost}}"/>
                   <label class="form-label" for="cost">Cost</label>
                  </div>

                </div>
            </div>
                <div class="row">
                <div class="col-md-6 mb-4">

                <div class="form-outline">
                <input type="integer" name="quantity"  class="form-control form-control-lg"value="{{$quantity}}" />
               <label class="form-label" for="quantity">Quantity</label>
                </div>

                </div>


                  <div class="col-md-6 mb-4 ">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" name="description"  value="{{$description}}"/>
                    <label for="description" class="form-label">Description</label>
                  </div>
              </div>
              </div>






              <div class="mt-4 pt-2">
              <button type="submit" class="btn btn-outline-success" name="submit">Update</button>
                <a href="{{ url ('list') }}" class="btn btn-outline-danger">Cancel</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  </form>




@endsection
    
</body>
</html>

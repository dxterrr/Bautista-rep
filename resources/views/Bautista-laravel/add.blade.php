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

@section ('title', 'ADD')

@section( 'content')
</header>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <form action="{{ route('save')}}" method="post">
    @csrf
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">PRODUCT</h2>
              <p class="text-white-50 mb-5">Add a Product</p>

              <div class="form-outline form-white mb-4">
                <label class="form-label" >Product Name</label>
                <input type="text"  class="form-control form-control-lg"  name="product_name" required/>
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" >Product Cost</label>
                <input type="number"  class="form-control form-control-lg" name="cost" required/>
              </div>

              <div class="form-outline form-white mb-4" >
                <label class="form-label" >Product Quantity</label>
                <input type="number"  class="form-control form-control-lg" name="quantity" required/>
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" >Product Description</label>
                <input type="text"  class="form-control form-control-lg" name="description" required/>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">ADD</button>

             

            </div>

            <div>
            </div>

          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</section>
@endsection
    
</body>
</html>

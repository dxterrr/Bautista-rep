<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('storage/css/styles.css')?>">
    
</head>

  

 
    <body class="bg">  
   
     

  
<form>
    @csrf
<section class="vh-100 gradient-custom">
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
                    <input type="text" name="product_name" class="form-control form-control-lg" />
                    <label class="form-label" for="product_name">Product Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="integer" name="cost" class="form-control form-control-lg" />
                    <label class="form-label" for="cost">Cost</label>
                  </div>

                </div>
            </div>      
                <div class="row">
                <div class="col-md-6 mb-4">

                <div class="form-outline">
                <input type="integer" name="quantity"  class="form-control form-control-lg" />
                <label class="form-label" for="quantity">Quantity</label>
                </div>

                </div>
                

                  <div class="col-md-6 mb-4 ">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" name="description"  />
                    <label for="description" class="form-label">Description</label>
                  </div>
              </div>
              </div>

              

            


              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Update" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  </form>
   
</body>
</html>
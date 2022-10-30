<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class='container'>
<form   action="{{route('products.update', ['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
@csrf
@method('patch')
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" value="{{$product->name}}" class="form-control" id="name" name='name' aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <label for="brand" class="form-label">Brand</label>
    <input type="text" value="{{$product->brand}}"  class="form-control" id="brand" name='brand'>
  </div>

  <div class="mb-3">
    <label for="description" class="form-label"> Description</label>
    <input type="text"   value="{{$product->description}}" class="form-control" id="description" name='description' aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="float" value="{{$product->price}}" class="form-control" id="price" name='price'>
  </div>

  <div class="mb-3">
    <label for="quantity" class="form-label">Quantity</label>
    <input type="number" value="{{$product->quantity}}"  class="form-control" id="quantity" name='quantity' aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <label for="tags" class="form-label">Tags</label>
    <input type="text"  value="{{$product->tags}}" class="form-control" id="tags" name='tags'>
  </div>

  <div class="mb-3">
    <label for="image" class="form-label">Upload The Product Image:</label>
    <input type="file" class="form-control" id="image" name='image'>
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

    </div>
</body>
</html>
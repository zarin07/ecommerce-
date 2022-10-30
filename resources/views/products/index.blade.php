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

  <table class="table" style="width:100%">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Brand</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Tags</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($products as $product)
      <tr>

        <td>{{$product->name}}</td>
        <td>{{$product->brand}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->tags}}</td>
        <td>
          <a href=" {{route('products.show', ['id'=>$product->id])}}" class="btn btn-primary">Show</a>
          <a href="{{route('products.edit', ['id'=>$product->id])}}" class="btn btn-success">Edit</a>
          <form style="display:inline" method="POST" action="{{route('products.destroy', ['id'=>$product->id])}}">
            @csrf
            @method("delete")
            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure want to delete?')">Delete</button>
          </form>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>

</body>

</html>
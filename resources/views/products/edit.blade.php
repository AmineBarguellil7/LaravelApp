<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product :</h1>
    <!-- message pour error -->
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <!-- message pour error -->
    <form action="{{route('product.update',['product'=>$product])}}" method="post">
        @csrf
        @method("put")
        <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="name" value="{{$product->name}}">
        </div>
        <div>
        <label>Qty</label>
        <input type="text" name="quantity" placeholder="quantity" value="{{$product->quantity}}">
        </div>
        <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="price" value="{{$product->price}}">
        </div>
        <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
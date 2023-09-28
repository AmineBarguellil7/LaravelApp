<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product :</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method("post")
        <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="name">
        </div>
        <div>
        <label>Qty</label>
        <input type="text" name="quantity" placeholder="quantity">
        </div>
        <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="price">
        </div>
        <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input type="submit" value="Save a new product">
        </div>
    </form>
</body>
</html>
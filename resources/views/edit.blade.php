<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/6136c76d0e.js" crossorigin="anonymous"></script>
</head>
<body>
<form action="{{url('updateproduct')}}" method="post" enctype="multipart/form-data" class="form">
    @csrf
    <input type="hidden" name="id" value="{{encrypt($product->id)}}">
    <div class="formHeader row">
        <h2 class="text-1 fl">Update Product Details</h2>
        <div class="fr">
            <button type="submit" class="btnSave bg-1 text-fff text-bold fr">SAVE</button><a href="" class="btnAdd fa fa-plus bg-1 text-fff"></a>
        </div>
    </div>
    <div class="formBody row">
        <div class="column s-6">
            <label class="inputGroup">
                <span>Name</span>
                <span><input type="text" value="{{$product->name}}" name="name"></span>
            </label>
            <label class="inputGroup">
                <span>Price</span>
                <span><input type="price" value="{{$product->price}}" name="price"></span>
            </label>
        </div>
    </div>
</form> 
</body>
</html>
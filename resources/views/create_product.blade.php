<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            margin: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            margin-bottom: 10px;
        }

        button[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <form action="{{ route('store_product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="Description">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="price" placeholder="Price">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="stock" placeholder="Stock">
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit Data</button>
    </form>
</body>

</html>

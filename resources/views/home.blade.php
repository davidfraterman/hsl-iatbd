<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="../css/app.css">
    <title>Home</title>
</head>
<body>
    @foreach ($products as $product)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text">{{ $product->max_lend_time }}</p>
                <p class="card-text">{{ $product->category }}</p>
                <p class="card-text">{{ $product->is_lended_out }}</p>
            </div>
        </div>
    @endforeach
</body>
</html>
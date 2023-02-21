<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Hello, world!</title>

    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 100%;
        }

        div#social-links ul li {
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 my-2">
                @foreach ($posts as $post)
                    <div class="card my-4">
                        <div class="card-header bg-success text-white">
                            <div class="card-title text-bold">{{ $post->title }}</div>
                        </div>
                        <div class="card-body">
                            {{ $post->description }}
                        </div>
                        <div class="card-footer text-center">
                            {!! $shareComponent !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>

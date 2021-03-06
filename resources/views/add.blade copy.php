<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#1e1e1e" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <title>Contest portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light header-color">
        <a class="navbar-brand text-light" href="/">Add contest</a>
        <a class="btn btn-warning my-2 my-sm-0 ml-auto" href="/">Return home</a>
    </nav>
    <form method="post" action="{{ url('addcontest') }}" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-12 p-4">
                    <div class="text-center">
                        <div class="content">
                            <input type="file" name="file" required>
                            <input class="form-control" name="title" placeholder="Insert contest title" required />
                            <input class="form-control" name="desc" placeholder="Insert contest description" required />
                            <label for="start">Start date</label>
                            <input type="month" value="2021-01" class="form-control"
                                placeholder="eg: June 2017" name="start" required>

                            <label for="end">End date</label>
                            <input type="month" value="2021-01" class="form-control"
                                name="end" required>

                        </div>
                        <button class="btn btn-warning btn btn-block mt-3" type="submit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
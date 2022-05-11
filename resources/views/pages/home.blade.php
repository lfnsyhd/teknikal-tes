<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Authentication forms">
    <meta name="author" content="Arasari Studio">
    <title>JTI/JTN - Technical Test by Alfan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="css/theme-05.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center" style="height: 100vh;">
            <div class="col-5 mb-5">
                <h5 class="mb-1">Hi, {{ Auth::user()->name }}</h5>
                <small class="text-muted">Here some good stuff for you</small>
                <div class="row mt-4">
                    <div class="col-6">
                        <div class="card">
                            <a href="{{ route('form.input') }}" style="text-decoration: none;">
                                <div class="card-body pb-2 text-white" style="background: #3d8e41; border: 1px solid #3d8e41">
                                    <p>Open Form Input</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <a href="{{ route('form.output') }}" style="text-decoration: none;">
                                <div class="card-body pb-2" style="background: #e2fae4; color: #3d8e41; border: 1px solid #3d8e41">
                                    <p>Open Form Ouput</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            style="font-size: 14px; color: #3d8e41; text-decoration: underline">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/demo.js"></script>
</body>

</html>
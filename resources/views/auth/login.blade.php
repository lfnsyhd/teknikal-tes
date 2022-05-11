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
    <div class="forny-container">
        <div class="forny-inner">
            <div class="forny-two-pane">
                <div>
                    <div class="forny-form">
                        <div>
                            <h4>Sign in into account</h4>
                            <p>Use your credentials to access your account.</p>
                        </div>
                        <form>
                            <div>
                                <a href="{{ route('auth.redirect') }}" class="text-decoration-none">
                                    <button class="btn btn-primary btn-block" type="button">
                                        <img src="{{ asset('img/google.fbaa7b5.svg') }}" alt="Google Icon" class="p-1 mr-2 bg-white rounded-circle" width="25">
                                        Sign in with Google
                                    </button>
                                </a>
                            </div>
                            <div class="mt-5">
                                Don't have an account? <a href="{{ route('auth.redirect') }}">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right-pane">
                    <div class="text-center" style="width: 300px">
                        <img src="{{ asset('img/monster.svg') }}" alt="Monster">
                        <div class="mt-10">
                            <h4 class="mb-4">Hello there!</h4>
                            <p>
                            This is the result of My Technical Test for Fullstack Programmer (PHP). Hope you enjoy the journey.
                            </p>
                        </div>
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
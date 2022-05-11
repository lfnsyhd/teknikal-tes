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
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-5 mb-5">
                <h5 class="mb-1">Form Input</h5>
                <small class="text-muted">Data Phone Number</small>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body pb-2" style="color: #3d8e41; border: 1px solid #3d8e41">
                                <form id="form">
                                    <div class="form-group">
                                        <label>No Handphone</label>
                                        <input type="text" class="form-control" placeholder="08XXXXXXXX" id="phone" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Provider</label>
                                        <select name="provider" id="provider" class="form-control">
                                            <option value="simpati">Simpati</option>
                                            <option value="as">AS</option>
                                            <option value="im3">Indosat IM3</option>
                                            <option value="xl">XL</option>
                                            <option value="axis">Axis</option>
                                            <option value="three">3</option>
                                            <option value="smartfren">Smartfren</option>
                                        </select>
                                    </div>
                                    <div class="form-group float-right">
                                        <button type="button" class="btn btn-success" id="save">
                                            Save
                                        </button>
                                        <button type="button" class="btn btn-primary" id="save-auto">
                                            Auto
                                        </button>
                                    </div>
                                    <div style="clear: both"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="{{ route('home') }}" style="font-size: 14px; text-decoration: underline; color: green">< Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script></head>

    <script>
        $('#save').click(() => {
            var data = $('#form').serialize();

            $.ajax({
                data: data,
                type: 'POST',
                url: '{!! route("input.manual") !!}',
                success: (response) => {
                    alert(response.message);
                }
            })
        });

        $('#save-auto').click(() => {
            $.post('{!! route("input.auto") !!}', (response) => {
                alert(response.message);
            });
        });
    </script>
</body>

</html>
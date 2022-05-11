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
        <div class="row justify-content-center mt-5">
            <div class="col-10 mb-5">
                <h5 class="mb-1">Output</h5>
                <small class="text-muted">Data Phone Number</small>
                <div class="row mt-4">
                    <div class="col-6">
                        <div class="card" style="color: #3d8e41; border: 1px solid #3d8e41">
                            <div class="card-title mb-1" style="color: #3d8e41; border-bottom: 1px solid #3d8e41">
                                <h6 class="text-center text-success m-2">Ganjil</h6>
                            </div>
                            <div class="card-body pb-3 pt-2">
                                <ul class="m-0 p-0 ml-3" id="ganjil"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card" style="color: #3d8e41; border: 1px solid #3d8e41">
                            <div class="card-title mb-1" style="color: #3d8e41; border-bottom: 1px solid #3d8e41">
                                <h6 class="text-center text-success m-2">Genap</h6>
                            </div>
                            <div class="card-body pb-3 pt-2">
                                <ul class="m-0 p-0 ml-3" id="genap">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="{{ route('home') }}" style="font-size: 14px; text-decoration: underline; color: green">
                            < Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form">
                        <input type="hidden" id="id">
                        <div class="form-group">
                            <label>Nomor Handphone</label>
                            <input type="text" class="form-control" name="phone" placeholder="08XXXXX" id="phone">
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save-edit">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    </head>

    <script>
        // <li><b>Simpati : </b><span>081389809911</span></li>
        function getData() {
            $('#genap').html('');
            $('#ganjil').html('');

            $.get('{!! route("output.all") !!}', (response) => {
                $.each(response, (index, data) => {
                    if (data["phone"] % 2 === 0) {
                        $('#genap').append('<li><b>' + data["provider"] + ' : </b><span>' + data["phone"] + '</span> > <a onclick="editData(' + data["id"] + ')">Edit</a> | <a onclick="deleteData(' + data["id"] + ')">Delete</a> </li>');
                    } else {
                        $('#ganjil').append('<li><b>' + data["provider"] + ' : </b><span>' + data["phone"] + '</span> > <a onclick="editData(' + data["id"] + ')">Edit</a> | <a onclick="deleteData(' + data["id"] + ')">Delete</a> </li>');
                    }
                });
            });
        }

        function editData(id) {
            $.get('/api/data/output/show/' + id, (response) => {
                $('#phone').val(response.phone);
                $('#id').val(response.id);
                $('#provider').find('option').each(function() {
                    var $this = $(this);
                    if ($this.text() == response.provider) {
                        $this.attr('selected', 'selected');
                        return false;
                    }
                });
                $('#exampleModal').modal('toggle');
            });
        }

        function deleteData(id) {
            $.get('/api/data/delete/' + id, (response) => {
                getData();
                alert(response.message);
            });
        }

        getData();

        $('#save-edit').click(() => {
            var data = $('#form').serialize();
            var id = $('#id').val();

            $.ajax({
                data: data,
                type: 'POST',
                url: '/api/post/edit/' + id,
                success: (reseponse) => {
                    getData();
                    $('#exampleModal').modal('hide');
                    alert(response.message);
                }
            });
        });
    </script>
</body>

</html>
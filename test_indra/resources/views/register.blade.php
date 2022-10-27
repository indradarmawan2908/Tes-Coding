<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register Akun</title>
</head>
<body>

<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-md-5 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <center><label>Form Register</label></center>
                    <hr>

                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Masukkan Nama Awal">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Masukkan Nama Akhir">
                    </div>

                    <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Alamat Email">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password"  placeholder="Masukkan Password">
                    </div>
                    
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="Masukkan Confirm Password" >
                    </div>

                    <button class="btn btn-register btn-block btn-primary">REGISTER</button>


                </div>
            </div>

            <div class="text-center" style="margin-top: 15px">
                Sudah punya akun? <a href="/login">Silahkan Login</a>
            </div>

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<script>
    $(document).ready(function() {

        $(".btn-register").click( function() {

            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var email    = $("#email").val();
            var password = $("#password").val();
            var confirm_password = $("#confirm_password").val();
            var token = $("meta[name='csrf-token']").attr("content");

            if (first_name.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nama Lengkap Wajib Diisi !'
                });
            } else if (last_name.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nama Lengkap Wajib Diisi !'
                });

            } else if(email.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Alamat Email Wajib Diisi !'
                });

            } else if(password.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Password Wajib Diisi !'
                });
            } else if(password.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Confirm Password Wajib Diisi !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "{{ route('register.store') }}",
                    type: "POST",
                    cache: false,
                    data: {
                        "first_name": first_name,
                        "last_name": last_name,
                        "email": email,
                        "password": password,
                        "confirm_password": confirm_password,
                        "_token": token
                    },

                    success:function(response){

                        if (response.success) {

                            Swal.fire({
                                type: 'success',
                                title: 'Congratulations !',
                                text: 'Registration is successful'
                            });

                            $("#first_name").val('');
                            $("#last_name").val('');
                            $("#email").val('');
                            $("#password").val('');
                            $("#confirm_password").val('');

                        } else {

                            Swal.fire({
                                type: 'error',
                                title: 'Opps ! Mohon Maaf',
                                text: 'Registration Failed, Please Check Your Data'
                            });

                        }

                        console.log(response);

                    },

                    error:function(response){
                        Swal.fire({
                            type: 'error',
                            title: 'Opps ! Mohon Maaf',
                            text: 'Registration Failed, Please Check Your Data'
                        });
                    }

                })

            }

        });

    });
</script>

</body>
</html>
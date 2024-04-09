<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>登入 - Admin</title>
    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">登入</h3>
                                    @if ($errors->any())
                                        <h5 style="color: red; text-align: center">{{ $errors->first() }}</h5>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <form id="formPost" method="post" action="{{ route('backend.login') }}">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="email" id="email" name="email"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">E-mail</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="password" id="password" name="password"
                                                placeholder="Password" />
                                            <label for="inputPassword">密碼</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary">登入</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>

    <script>
        $(function() {

            $('#formPost').on('submit', function() {


                let error_msg = [];

                if ($('#email').val() == '') {
                    error_msg.push('請輸入 E-mail')
                }

                if ($('#password').val() == '') {
                    error_msg.push('請輸入密碼')
                }

                if (error_msg.length > 0) {
                    alert(error_msg.join('\n'))
                    return false
                }
            })
        })
    </script>

</body>

</html>

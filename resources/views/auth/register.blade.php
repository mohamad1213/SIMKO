<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials/head')
</head>

<body class="body  h-100">
    <div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-aside text-center  d-flex flex-column flex-row-auto">
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <div class="text-center mb-lg-4 mb-2 pt-5 logo">
                    <img src="{{url('admin/images/logo-white.png')}}" alt="">
                </div>
                <h3 class="mb-2 text-white">Welcome back!</h3>
                <p class="mb-4">User Experience & Interface Design <br>Strategy SaaS Solutions</p>
            </div>
            <div class="aside-image position-relative" style="background-image:url({{ url('admin/images/background/pic-2.png') }});">
                <img class="img1 move-1" src="{{url('admin/images/background/pic3.png')}}" alt="">
                <img class="img2 move-2" src="{{url('admin/images/background/pic4.png')}}" alt="">
                <img class="img3 move-3" src="{{url('admin/images/background/pic5.png')}}" alt="">

            </div>
        </div>
        <div
            class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <div class="d-flex justify-content-center h-100 align-items-center">
                <div class="authincation-content style-2">
                    <div class="row no-gutters">
                        <div class="col-xl-12 tab-content">
                            <div id="sign-up" class="auth-form tab-pane fade show active  form-validation">
                                <form method="POST" action="{{ route('register.process') }}">
                                    @csrf
                                    <div class="text-center mb-4">
                                        <h3 class="text-center mb-2 text-black">Sign Up</h3>
                                        <span>Your Social Campaigns</span>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label mb-2 fs-13 label-color font-w500">Name</label>
                                        <input type="text" class="form-control" name="name" Required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label mb-2 fs-13 label-color font-w500">Email
                                            address</label>
                                        <input type="email" class="form-control" name="email" Required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label mb-2 fs-13 label-color font-w500">Password</label>
                                        <input type="password" class="form-control" name="password" Required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label mb-2 fs-13 label-color font-w500">Password Confirmation</label>
                                        <input type="password" class="form-control" name="password_confirmation" Required>
                                    </div>
                                    <a href="javascript:void(0);" class="text-primary float-end mb-4">Forgot
                                        Password ?</a>
                                    <button class="btn btn-block btn-primary">Sign In</button>
                                </form>
                                <div class="new-account mt-3 text-center">
                                    <p class="font-w500">Already Account ? <a class="text-primary"
                                            href="{{route('login')}}" data-toggle="tab">Sign In</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>

</body>

</html>
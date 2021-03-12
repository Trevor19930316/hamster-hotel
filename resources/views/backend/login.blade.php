@extends('backend.template.extends.login')

@section('self-css-style')
    <style>
        .login-container {

        }

        .login-form {
            width: 385px;
            margin: 30px auto;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control, .login-btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .input-group-addon .fa {
            font-size: 18px;
        }

        .login-btn {
            font-size: 15px;
            font-weight: bold;
        }

        .social-btn .btn {
            border: none;
            margin: 10px 3px 0;
            opacity: 1;
        }

        .social-btn .btn:hover {
            opacity: 0.9;
        }

        .social-btn .btn-primary {
            background: #507cc0;
        }

        .social-btn .btn-info {
            background: #64ccf1;
        }

        .social-btn .btn-danger {
            background: #df4930;
        }

        .or-seperator {
            margin-top: 20px;
            text-align: center;
            border-top: 1px solid #ccc;
        }

        .or-seperator i {
            padding: 0 10px;
            background: #f7f7f7;
            position: relative;
            top: -11px;
            z-index: 1;
        }
    </style>
@endsection

@section('title', '登入頁')

@section('content')
    <div class="container-fluid login-container">
        <div class="login-form">
            <form action="{{route('backend.login.login')}}" method="post">
                @csrf
                <h2 class="text-center">Hello</h2>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="email" placeholder="帳號 Account"
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="密碼 Password"
                               required="required">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary login-btn btn-block">登入</button>
                </div>
                @if($errors->all())
                    <div class="form-group small">
                        @foreach($errors->all() as $error)
                            <div class="text-danger font-weight-bold">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <div class="clearfix">
                    <label class="pull-left checkbox-inline float-left">
                        <input type="checkbox" name="remember">
                        <span class="d-inline-block pl-1">
                        記得我
                    </span>
                    </label>
                    <span class="d-inline-block float-right">
                    <a href="#" class="pull-right">忘記密碼?</a>
                </span>
                </div>
                <div class="or-seperator"><i>or</i></div>
                <p class="text-center">使用社群媒體帳號登入</p>
                <div class="text-center social-btn">
                    <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>Facebook</a>
                    <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i>Twitter</a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-google"></i>Google</a>
                </div>
            </form>
            <p class="text-center text-muted small">還沒有帳號嗎? <a href="#">從這裡註冊!</a></p>
        </div>
    </div>
@endsection


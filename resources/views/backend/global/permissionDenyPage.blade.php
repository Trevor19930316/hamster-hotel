@extends('backend.template.extends.main')

@section('title','maintain')

@section('content')
    <div class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card border-0 mx-auto" style="max-width: 30rem;box-shadow: 10px 10px 14px 1px rgba(00, 00, 00, 0.2);">
                <div class="p-5">
                    <div class="mb-5 text-center">
                        <h4>您的權限不足</h4>
                        <div>請通知您的主管！</div>
                    </div>
                    <div class="mb-3">
                        <a href="{{route('backend.dashboard')}}" class="btn btn-block btn-primary">
                            回首頁
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

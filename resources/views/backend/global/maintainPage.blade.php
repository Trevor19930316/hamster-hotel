@extends('backend.template.extends.main')

@section('title','maintain')

@section('content')
    <div class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card border-0 mx-auto" style="max-width: 30rem;box-shadow: 10px 10px 14px 1px rgba(00, 00, 00, 0.2);">
                <div class="p-5">
                    <div class="mb-4">
                        <img style="width: 100%;height: auto;" src="{{asset('images/global/maintaining.png')}}">
                    </div>
                    <div class="text-center">
                        <h1>維護中</h1>
                        <p>系統升級修整中，請稍候片刻 ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

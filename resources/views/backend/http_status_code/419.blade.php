@extends('backend.template.extends.main')

@section('title','404')

@section('content')
    @component('backend.template.components.http_status_code')
        @slot('http_status_code_title','419')
        @slot('http_status_code_subtitle','糟糕!')
        @slot('http_status_code_content','抱歉！登入過期，請重新登入！')
    @endcomponent
@endsection

@extends('backend.template.extends.main')

@section('title','404')

@section('content')
    @component('backend.components.http_status_code')
        @slot('http_status_code_title','422')
        @slot('http_status_code_subtitle','糟糕!')
        @slot('http_status_code_content','抱歉！檔案過大！')
    @endcomponent
@endsection

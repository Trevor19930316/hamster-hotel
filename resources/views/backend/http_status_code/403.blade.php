@extends('backend.template.extends.main')

@section('title','403')

@section('content')
    @component('backend.components.http_status_code')
        @slot('http_status_code_title','403')
        @slot('http_status_code_subtitle','禁止訪問!')
        @slot('http_status_code_content','抱歉，你沒有權限瀏覽此頁面！')
    @endcomponent
@endsection

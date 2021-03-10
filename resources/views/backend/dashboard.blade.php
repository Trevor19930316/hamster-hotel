@extends('backend.template.extends.main')

@section('title', '這是首頁')

@section('content')
    <?php
    dump(session()->all());
    ?>
@endsection

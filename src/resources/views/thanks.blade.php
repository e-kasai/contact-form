@extends('layouts.app')

{{-- asset内を読み込みたいCSSファイルパスに変更 ex index.cssなど--}}
@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection


@section('content')
    <h1>お問い合わせありがとうございます。</h1>
@endsection






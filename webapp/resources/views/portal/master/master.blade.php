@extends('layout.common')
 
@section('title', 'ページタイトル')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', 'インデックスページの説明文')
@section('pageCss')
<link href="/css/webapp/index.css" rel="stylesheet">
@endsection
 
@include('layout.header')
 
@section('content')
    
@endsection
 
@include('layout.submenu')
 
@include('layout.footer')
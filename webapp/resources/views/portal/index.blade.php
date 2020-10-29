@extends('layouts.common')
 
@section('title', 'インデックスページ')
@section('keywords', 'キーワード1,キーワード2,キーワード3')
@section('description', 'インデックスページの説明文です')
@section('pageCss')
<link href="/css/webapp/index.css" rel="stylesheet">
@endsection
 
@include('components.header')
 
@section('content')
    
@endsection
 
@include('components.submenu')
 
@include('components.footer')
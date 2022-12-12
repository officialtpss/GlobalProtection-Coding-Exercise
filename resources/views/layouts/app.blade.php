@extends('layouts.base')

@section('title')
@php
    $urlSegment = collect(request()->segments())->last();
    echo pageTitle($urlSegment );
@endphp 

    
@endsection

@section('metafields')
    <?php
    $route=collect(request()->segments())->last();
    if($route !== 'notFound'){
        $metafield = metaData($route); 
    }else{
        $metafield = []; 
    } 
    if($metafield){
    foreach ($metafield as $key => $value) { ?>
        <meta name="{{ $key }}" content="{{ $value }}">
     <?php } 
     }?>
@endsection

@section('body')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection

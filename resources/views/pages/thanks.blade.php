@extends('layout.master')
@section('title',$page)
@section('navbar')
@parent
 Hello {{$yourEmail}}   
@endsection    

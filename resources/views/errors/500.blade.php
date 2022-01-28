@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
@section('description','The problem is not with your PC or Internet connection but instead is a problem with the web site\'s server.')
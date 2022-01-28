@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
@section('description', 'The client request has not been completed because it lacks valid authentication credentials for the requested resource.')

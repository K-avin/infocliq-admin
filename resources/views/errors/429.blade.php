@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
@section('description', 'Indicates the user has sent too many requests in a given amount of time')

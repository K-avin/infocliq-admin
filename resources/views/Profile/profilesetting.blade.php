@extends('Admin.layouts.app')
@section('content')
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('Admin.layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        @include('Admin.layouts.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="view-task-page">
                    <h1>Hi</h1>
                </div>

                {{-- @include('Admin.layouts.footer') --}}
            </div>
        </div>
    </div>
    @endsection
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
                    <div class="task-main-section">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-section">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card-items-horizondal-text">
                                                        <div class="priority-star-high">
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-items-horizondal-text">
                                                        <div class="task-type">
                                                            General
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="time">
                                                        <div class="completed-time card-items-horizondal-text">
                                                            1h 23m
                                                        </div>
                                                        <div class="total-time card-items-horizondal-text">
                                                            2h
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-name">
                                                <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Project
                                        : Friendsmatrimony 1.0</a>
                                            </div>
                                            <div class="module">
                                                Module : 01
                                            </div>
                                            <div class="task-title">
                                                <p class="limit-text">
                                                    PRINT & VIEW Project : Enable Enlarge view For All The Module & Task [ Tree View ] P2</p>
                                            </div>
                                            <div class="action-btn-section">
                                                <div class="start horizontal-order">
                                                    <i class="far fa-play active"></i>
                                                </div>
                                                <div class="pause horizontal-order">
                                                    <i class="fas fa-pause"></i>
                                                </div>
                                                <div class="cancel horizontal-order">
                                                    <i class="fas fa-ban"></i>
                                                </div>
                                                <div class="edit-file-section horizontal-order">
                                                    <div class="edit horizontal-order">
                                                        <i class="fal fa-file-edit"></i> Notes
                                                    </div>
                                                    <div class="attachment horizontal-order">
                                                        <i class="fal fa-paperclip"></i> File
                                                    </div>
                                                </div>
                                                <div class="status-started horizontal-order">
                                                    Start
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('Admin.Task.components.taskmodel')
                    </div>
                </div>

                {{-- @include('Admin.layouts.footer') --}}
            </div>
        </div>
    </div>
    @endsection
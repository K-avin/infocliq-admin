@extends('layouts.app')
@section('content')
<div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2md font-semibold text-gray-700 dark:text-gray-200"
    >
      All Projects
    </h2>
    {{-- add Projects --}}
    <a href="{{route('add.project')}}" class="dark:bg-gray-800 dark:text-gray-400 dark:border-gray-800 flex items-center justify-between p-4 mb-8 text-sm font-semibold bg-white text-gray-600 border-gray-200 border rounded-lg shadow-sm focus:outline-none focus:shadow-outline-purple">
        <div class="flex items-center">
            <svg  xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Create New Project</span>
          </div>
          <span class="text-green-500">Create hear &RightArrow;</span>
    </a>
    <!-- Cards -->
    <div class="grid gap-6 mb-8  xl:grid-cols-2">    
      <!-- Card -->
      <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="m-1">
          <p class="mb-2 text-md font-medium text-gray-600 dark:text-gray-400">Project : Sports club management system
            <span class="text-sm text-gray-500 font-mono inline px-2 align-top float-right active:text-red-500 hover:text-red-500 focus:outline-none focus:shadow-outline-red">
                <a href="{{route('view.projectsingleview')}}">
                    <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                <path class="animate-pulse" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </a>
            </span>
           </p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Total Modules<span class="mg-s-1 mr-2">:</span>06</p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Ongoing Modules<span class="mg-s-2 mr-2">:</span>04</p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Deadline<span class="mg-s-3 mr-2">:</span>2022-02-16</p>
            
            <div class="mb-5">
                <p class="mb-2 mt-5 text-sm font-medium text-gray-500 dark:text-gray-400">Developers</p>
                <span class="px-2 py-1-dev-span text-sm font-small leading-tight text-gray-500 bg-gray-100 rounded-full dark:text-gray-200 dark:bg-gray-700">Kabilraj</span>
                <span class="px-2 py-1-dev-span text-sm font-small leading-tight text-gray-500 bg-gray-100 rounded-full dark:text-gray-200 dark:bg-gray-700">Vinoyan</span>
                <span class="px-2 py-1-dev-span text-sm font-small leading-tight text-gray-500 bg-gray-100 rounded-full dark:text-gray-200 dark:bg-gray-700">Thusatharan</span>
            </div>
        
            <p class="text-md font-medium text-gray-600 dark:text-gray-400">
                <span class="text-purple-600 inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="far fa-play"></i>
                </span>
                <span class="inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="fal fa-pause"></i>
                </span>
                <span class="inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="fal fa-trash"></i>
                </span>
                <span class="inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="fal fa-edit"></i>
                </span> 
                <span class="inline align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100">Compleet</span>
            </p>
        </div>
      </div>
      <!-- Card -->
      <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="m-1">
          <p class="mb-2 text-md font-medium text-gray-600 dark:text-gray-400">Project : Sports club management system
            <span class="text-sm text-gray-500 font-mono inline px-2 align-top float-right active:text-red-500 hover:text-red-500 focus:outline-none focus:shadow-outline-red">
                    <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                <path class="animate-pulse" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </span>
           </p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Total Modules<span class="mg-s-1 mr-2">:</span>06</p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Ongoing Modules<span class="mg-s-2 mr-2">:</span>04</p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Deadline<span class="mg-s-3 mr-2">:</span>2022-02-16</p>
            
            <div class="mb-5">
                <p class="mb-2 mt-5 text-sm font-medium text-gray-500 dark:text-gray-400">Developers</p>
                <span class="px-2 py-1-dev-span text-sm font-small leading-tight text-gray-500 bg-gray-100 rounded-full dark:text-gray-200 dark:bg-gray-700">Kabilraj</span>
                <span class="px-2 py-1-dev-span text-sm font-small leading-tight text-gray-500 bg-gray-100 rounded-full dark:text-gray-200 dark:bg-gray-700">Vinoyan</span>
                <span class="px-2 py-1-dev-span text-sm font-small leading-tight text-gray-500 bg-gray-100 rounded-full dark:text-gray-200 dark:bg-gray-700">Thusatharan</span>
            </div>
        
            <p class="text-md font-medium text-gray-600 dark:text-gray-400">
                <span class="text-purple-600 inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="far fa-play"></i>
                </span>
                <span class="inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="fal fa-pause"></i>
                </span>
                <span class="inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="fal fa-trash"></i>
                </span>
                <span class="inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="fal fa-edit"></i>
                </span> 
                <span class="inline align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100">Compleet</span>
            </p>
        </div>
      </div>
    </div>
</div>
@endsection

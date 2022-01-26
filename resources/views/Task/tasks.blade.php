@extends('layouts.app') @section('content')
<div class="container px-6 mx-auto grid">
  <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    My Tasks
  </h2>
  {{-- add task --}}
  <a href="{{route('add.task')}}"
    class="dark:bg-gray-800 dark:text-gray-400 dark:border-gray-800 flex items-center justify-between p-4 mb-8 text-sm font-semibold bg-white text-gray-600 border-gray-200 border rounded-xl focus:outline-none focus:shadow-outline-purple">
    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span>Add New Task</span>
    </div>
    <span class="text-green-500">Add hear &RightArrow;</span>
  </a>

  {{-- Sketole --}}
  @include('Task.components.skeletonTask')
  {{-- END --}}

  <!-- Cards -->
  <div class="response hidden">
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-3">
      <!-- Card -->
      @foreach ($tasks as $task)
      {{-- @include('Task.components.skeletonTask') --}}
      <div class="bg-white text-black w-full max-w-md h-50 flex-col rounded-xl shadow-xl p-4 dark:bg-gray-800">
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            @if ($task->priority_level == 'high')
            <div class="p-2 mr-2 text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
              @elseif ($task->priority_level == 'medium')
              <div class="p-2 mr-2 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                @elseif ($task->priority_level == 'low')
                <div
                  class="p-2 mr-2 text-yellow-400 bg-yellow-100 rounded-full dark:text-yellow-100 dark:bg-yellow-400">
                  @endif
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                      clip-rule="evenodd" />
                  </svg>
                </div>

                {{-- <span
                  class="capitalize inline align-top float-right py-1-dev-span text-sm font-small leading-tight rounded-md text-purple-700 bg-purple-100 dark:bg-purple-700 dark:text-purple-100">OT</span>
                --}}
                <span
                  class="capitalize inline align-top float-right py-1-dev-span text-xs font-xs leading-tight rounded-md text-blue-500 bg-blue-100 dark:text-blue-100 dark:bg-blue-500">General</span>
              </div>
              <div class="flex items-center space-x-4">
                <div class="text-yellow-400 hover:text-yellow-300 cursor-pointer">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                  <span class="text-sm font-sm">{{$task->points}}</span>
                </div>

                <span
                  class="capitalize inline align-top float-right py-1-task-span text-xs font-xs leading-tight rounded-md text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100">
                  <svg xmlns="http://www.w3.org/2000/svg"
                    class="@if($task->status == 'start') animate-spin @endif h-3 w-3 mr-1 mt-px inline align-top"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  {{$task->duration_hours}}
                </span>

                <div class="cursor-pointer">
                  <img class="w-4 h-4 rounded-lg" src="https://i.pravatar.cc/300" />
                </div>
              </div>
            </div>
            <div class="mt-3 text-gray-500 font-normal text-sm">
              <p
                class="mb-1 @if ($task->status == 'canceled') line-through @endif text-md font-medium text-gray-600 dark:text-gray-400 text-limite-line-1">
                Project <span class="mg-st-1 mr-2">:</span>
                {{$task->project}}</p>
              <p
                class="mb-1 @if ($task->status == 'canceled') line-through @endif text-sm  text-gray-600 dark:text-gray-400 text-limite-line-1">
                Modules<span class="mg-st-2 mr-2">:</span>{{$task->module}}</p>
              @if ($task->description)
              <p
                class="mb-2 @if ($task->status == 'canceled') line-through @endif text-sm h-12  text-gray-500 dark:text-gray-400 text-limite-line-2">
                {{$task->description}}</p>
              @else
              <p class="mb-2 text-sm  text-gray-300 dark:text-gray-400 text-limite-line-2">Enter the task description.
                No
                special characters are allowed in Task Description.</p>
              @endif


              <p class="text-md bottom-0 font-medium text-gray-600 dark:text-gray-400">
                @if ($task->status == 'start')
                <span
                  class="text-purple-600 cursor-pointer inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                  <i class="far fa-play"></i>
                </span>
                @else
                <span class="inline px-2 cursor-pointer align-top float-left py-1-dev-span text-sm font-small">
                  <i class="far fa-play"></i>
                </span>
                @endif
                @if ($task->status == 'on hold')
                <span
                  class="text-blue-600 cursor-pointer inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                  <i class="fal fa-pause"></i>
                </span>
                @else
                <span class="inline cursor-pointer px-2 align-top float-left py-1-dev-span text-sm font-small">
                  <i class="fal fa-pause"></i>
                </span>
                @endif
                @if ($task->status == 'completed' || $task->status == 'canceled')
                <span style="display: none"
                  class="text-green-600 cursor-pointer inline px-2 align-top float-left py-1-dev-span text-sm font-small"></span>
                @elseif ($task->status == 'start')
                <span
                  class="text-green-600 cursor-pointer inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                  <i class="far fa-check"></i>
                </span>
                @else
                <span
                  class="hover:text-green-600 cursor-pointer inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                  <i class="far fa-check"></i>
                </span>
                @endif

                {{-- <a href="{{url('manager/project/delete/'.$project->id)}}"> --}}
                  @if ($task->status == 'canceled')
                  <span
                    class="inline text-red-600 cursor-pointer px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="fal fa-ban"></i>
                  </span>
                  @else
                  <span
                    class="inline hover:text-red-600 cursor-pointer px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="fal fa-ban"></i>
                  </span>
                  @endif
                  @if($task->note == 'null')
                  <span
                    class="inline hover:text-blue-600 cursor-pointer px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="fal fa-comment-alt-lines"></i>
                  </span>
                  @else
                  <span @click="openModal"
                    class="inline text-blue-500 cursor-pointer px-2 align-top float-left py-1-dev-span text-sm font-small">
                    <i class="fas fa-comment-alt-lines"></i>
                  </span>
                  @endif

                  <span
                    class="inline text-blue-500 cursor-pointer px-2 align-top float-left py-1-dev-span text-sm font-small">
                    @if ($task->attachment == 'null')
                    <a href="" target="_blank">
                      <i class="fal fa-file-alt"></i>
                      <span class="text-xs">Doc's</span>
                    </a>
                    @else
                    <a href="" target="_blank">
                      <i class="fad fa-file-alt"></i>
                      <span class="text-xs">Doc's</span>
                    </a>
                    @endif
                  </span>

                  @if ($task->status == 'completed')
                  <span
                    class="capitalize inline rounded-md align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100">Completed</span>
                  @elseif ($task->status == 'pending')
                  <span
                    class="capitalize inline  rounded-md align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-orange-700 bg-orange-100 dark:bg-orange-500 dark:text-orange-100">{{$task->status}}</span>
                  @elseif ($task->status == 'on hold')
                  <span
                    class="capitalize inline rounded-md align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-blue-700 bg-blue-100 dark:bg-blue-500 dark:text-blue-100">{{$task->status}}</span>
                  @elseif ($task->status == 'canceled')
                  <span
                    class="capitalize inline rounded-md align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-red-700 bg-red-100 dark:bg-red-600 dark:text-red-100">{{$task->status}}</span>
                  @elseif ($task->status == 'start')
                  <span
                    class="capitalize inline rounded-md align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-purple-700 bg-purple-100 dark:bg-purple-100 dark:text-purple-100">{{$task->status}}</span>
                  @endif
              </p>
            </div>
          </div>
          @endforeach
          @include('Task.components.notemodel')
          <script>
            setTimeout(() => {
              sketole()
            }, 1000);

            function sketole() {
              var sketole = document.querySelector(".taskSketole");
              var response = document.querySelector(".response");

              sketole.classList.add("hidden");
              response.classList.remove('hidden')
            }
          </script>
        </div>
      </div>
    </div>
    @endsection
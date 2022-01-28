@extends('layouts.app')
@section('content')
<div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2md font-semibold text-gray-700 dark:text-gray-200"
    >
      
    </h2>
    
    <!-- Cards -->
    <div class="grid gap-6 mb-8  xl:grid-cols-1">    
      <!-- Card -->
      <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="m-1">
          <p class="mb-2 text-md font-medium text-gray-600 dark:text-gray-300">Project : {{$project->project_name}}
            @if ($project->status == 'completed')
              <span class="capitalize inline rounded-md align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100">Completed</span>
            @elseif ($project->status == 'pending')
              <span class="capitalize inline  rounded-md align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-orange-700 bg-orange-100 dark:bg-orange-500 dark:text-orange-100">{{$project->status}}</span>
            @elseif ($project->status == 'on hold')
              <span class="capitalize inline rounded-md align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-blue-700 bg-blue-100 dark:bg-blue-500 dark:text-blue-100">{{$project->status}}</span>
            @elseif ($project->status == 'canceled')
              <span class="capitalize inline rounded-md align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-red-700 bg-red-100 dark:bg-red-600 dark:text-red-100">{{$project->status}}</span>
            @elseif ($project->status == 'start')
              <span class="capitalize inline rounded-md align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-purple-700 bg-purple-100 dark:bg-purple-100 dark:text-purple-100">{{$project->status}}</span>
            @endif
          </p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Total Modules<span class="mg-sd-1 mr-2">:</span>06</p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Project Manager<span class="mg-sd-2 mr-2">:</span>04</p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Deadline<span class="mg-sd-3 mr-2">:</span>{{$project->due_date}}</p>            
        </div>
      </div>
    </div>
    {{-- Developers --}}
    <div class="grid gap-6 mb-8  xl:grid-cols-1">  
        <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="m-1">
              <?php
                $developers = json_decode($project->developers,true)
              ?>
                <p class="mb-2 text-md font-medium text-gray-600 dark:text-gray-300">Developers</p>
                @foreach ($developers as $developer)
                  <span class="dark:text-gray-400 px-2 py-1-dev-span text-sm font-small leading-tight text-gray-500 bg-gray-100 rounded-full dark:text-gray-200 dark:bg-gray-700">{{$developer}}</span>                    
                @endforeach                          
            </div>
        </div>
    </div>
    
    {{-- add module --}}
    <a class="dark:bg-gray-800 cursor-pointer dark:text-gray-400 dark:border-gray-800 flex items-center justify-between p-4 mb-8 text-sm font-semibold bg-white text-gray-600 border-gray-200 border rounded-lg shadow-sm focus:outline-none focus:shadow-outline-purple"
    @click="openModal">
            <div class="flex items-center">
              <svg  xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span>Add new module</span>
            </div>
            <span class="text-green-500">Add &RightArrow;</span>
          </a>
          {{-- modal --}}
          @include('Project.Components.moduleModal')

    {{-- heading --}}
    <div class="grid gap-6 mb-4  xl:grid-cols-1">  
        <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="m-1">
                <p class="mb-2 text-md font-medium text-gray-500 dark:text-gray-300">Module : FM-0001:-Module 01</p>         
            </div>
        </div>
    </div>
    <div class="grid gap-6 mb-8  xl:grid-cols-1">  
        <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="task-section px-3 mb-12">
                {{-- Table --}}
              <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Tasks</h4>
              <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                  <table class="w-full whitespace-no-wrap">
                    <thead>
                      <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Task</th>
                        <th class="px-4 py-3">Due date</th>
                        <th class="px-4 py-3">Duration</th>
                        <th class="px-4 py-3">Assign to</th>
                        <th class="px-4 py-3">View</th>
                        <th class="px-4 py-3">Status</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                            <div>
                              <p class="font-semibold">Home page design and review</p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          2022-02-01
                        </td>
                        <td class="px-4 py-3 text-sm">
                            19m 53s / 03h
                          </td>
                        <td class="px-4 py-3 text-sm">
                          kabilraj
                        </td>                
                        <td class="px-4 py-3 text-sm">
                            <a class="text-blue-600" href=""><u>View</u></a>
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <span
                              class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                              Compleet
                            </span>
                        </td>                
                      </tr>
                      <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                            <div>
                              <p class="font-semibold">Home page design and review</p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          2022-02-01
                        </td>
                        <td class="px-4 py-3 text-sm">
                            19m 53s / 03h
                          </td>
                        <td class="px-4 py-3 text-sm">
                          kabilraj
                        </td>                
                        <td class="px-4 py-3 text-sm">
                            <a class="text-blue-600" href=""><u>View</u></a>
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <span
                              class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                              Compleet
                            </span>
                        </td>                
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div
                  class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                  <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                  </span>
                  <span class="col-span-2"></span>
                  <!-- Pagination -->
                  <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                      <ul class="inline-flex items-center">
                        <li>
                          <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-red"
                            aria-label="Previous">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                              <path
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                            1
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                            2
                          </button>
                        </li>
                        <li>
                          <button
                            class="px-3 py-1 text-white transition-colors duration-150 bg-red-600 border border-r-0 border-red-600 rounded-md focus:outline-none focus:shadow-outline-red">
                            3
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                            4
                          </button>
                        </li>
                        <li>
                          <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                            8
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                            9
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-red"
                            aria-label="Next">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                              <path
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                          </button>
                        </li>
                      </ul>
                    </nav>
                  </span>
                </div>
              </div>
            </div>
        </div>
    </div>
    

    {{-- heading --}}
    <div class="grid gap-6 mb-4  xl:grid-cols-1">  
        <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="m-1">
                <p class="mb-2 text-md font-medium text-gray-500 dark:text-gray-300">Module : FM-0001:-Module 02</p>         
            </div>
        </div>
    </div>
    <div class="grid gap-6 mb-8  xl:grid-cols-1">  
        <div class="items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="task-section px-3">
                {{-- Table --}}
              <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Tasks</h4>
              <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                  <table class="w-full whitespace-no-wrap">
                    <thead>
                      <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Task</th>
                        <th class="px-4 py-3">Due date</th>
                        <th class="px-4 py-3">Duration</th>
                        <th class="px-4 py-3">Assign to</th>
                        <th class="px-4 py-3">View</th>
                        <th class="px-4 py-3">Status</th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                      <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                            <div>
                              <p class="font-semibold">Home page design and review</p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          2022-02-01
                        </td>
                        <td class="px-4 py-3 text-sm">
                            19m 53s / 03h
                          </td>
                        <td class="px-4 py-3 text-sm">
                          kabilraj
                        </td>                
                        <td class="px-4 py-3 text-sm">
                            <a class="text-blue-600" href=""><u>View</u></a>
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <span
                              class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                              Compleet
                            </span>
                        </td>                
                      </tr>
                      <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                            <div>
                              <p class="font-semibold">Home page design and review</p>
                            </div>
                          </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                          2022-02-01
                        </td>
                        <td class="px-4 py-3 text-sm">
                            19m 53s / 03h
                          </td>
                        <td class="px-4 py-3 text-sm">
                          kabilraj
                        </td>                
                        <td class="px-4 py-3 text-sm">
                            <a class="text-blue-600" href=""><u>View</u></a>
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <span
                              class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                              Compleet
                            </span>
                        </td>                
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div
                  class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                  <span class="flex items-center col-span-3">
                    Showing 21-30 of 100
                  </span>
                  <span class="col-span-2"></span>
                  <!-- Pagination -->
                  <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <nav aria-label="Table navigation">
                      <ul class="inline-flex items-center">
                        <li>
                          <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-red"
                            aria-label="Previous">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                              <path
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                            1
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                            2
                          </button>
                        </li>
                        <li>
                          <button
                            class="px-3 py-1 text-white transition-colors duration-150 bg-red-600 border border-r-0 border-red-600 rounded-md focus:outline-none focus:shadow-outline-red">
                            3
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                            4
                          </button>
                        </li>
                        <li>
                          <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                            8
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red">
                            9
                          </button>
                        </li>
                        <li>
                          <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-red"
                            aria-label="Next">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                              <path
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                          </button>
                        </li>
                      </ul>
                    </nav>
                  </span>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

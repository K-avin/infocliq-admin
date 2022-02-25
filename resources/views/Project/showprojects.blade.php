@extends('layouts.app')
@section('content')
<div class="container px-6 mx-auto grid">
    <h2
      class="my-4 text-lg font-semibold text-gray-700 dark:text-gray-200"
    >
      All Projects
    </h2>
    {{-- add Projects --}}
    <a href="{{route('add.project')}}" class="dark:bg-gray-800 dark:text-gray-400 dark:border-gray-800 flex items-center justify-between p-4 mb-8 text-sm font-semibold bg-white text-gray-600 border-gray-200 border rounded-xl focus:outline-none focus:shadow-outline-purple">
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
      @foreach ($projects as $project)
      <div class="items-center p-4 bg-white rounded-xl shadow-xl dark:bg-gray-800">
        <div class="m-1">
          <p class="mb-2 text-md font-medium text-gray-600 dark:text-gray-400">Project : {{$project->project_name}}
            <span class="text-sm cursor-pointer text-gray-500 font-mono inline px-2 align-top float-right active:text-red-500 hover:text-red-500 dark:text-red-400 focus:outline-none focus:shadow-outline-red">
                <img class="w-5 h-5 rounded-full" src="{{asset('storage/'.$project->project_logo)}}" alt="">
            </span>
            <span class="text-sm cursor-pointer text-gray-500 font-mono inline px-2 align-top float-right active:text-red-500 hover:text-red-500 dark:text-red-400 focus:outline-none focus:shadow-outline-red">
                <a href="{{url('manager/project/details/'.$project->id)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                      </svg>
            </a>
            </span>

           </p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Total Modules<span class="mg-s-1 mr-2">:</span>06</p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Ongoing Modules<span class="mg-s-2 mr-2">:</span>04</p>
            <p class="mb-2 text-sm  text-gray-600 dark:text-gray-400">Deadline<span class="mg-s-3 mr-2">:</span>{{$project->due_date}}</p>
            
            <?php
                $developers = json_decode($project->developers,true)
            ?>
            <div class="mb-5">
                <p class="mb-2 mt-5 text-sm font-medium text-gray-500 dark:text-gray-400">Developers</p>
                @foreach ($developers as $developer)
                <span class="px-2 py-1-dev-span text-sm font-small leading-tight text-gray-500 bg-gray-100 rounded-full dark:text-gray-200 dark:bg-gray-700">{{$developer}}</span>
                @endforeach
                {{-- <div class="flex -space-x-2 overflow-hidden">                    
                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://avatars.githubusercontent.com/u/19858893?v=4" alt="">                    
                </div> --}}
               
            </div>
        
            <p class="text-md font-medium text-gray-600 dark:text-gray-400">
                @if ($project->status == 'start')
                    <span class="text-purple-600 cursor-pointer inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                        <i data-id='{!! $project->status !!}' class="far fa-play"></i>
                    </span>
                @else
                {{-- <form action="{{url('manager/project/statusupdate/'.$project->id)}}" method="post"> --}}
                    {{-- @csrf --}}
                    {{-- <input type="text" value="start" name="status" style="display: none"> --}}
<span></span>
                    <a onclick="dosomething('{{ $project->id }}')">
                        <span class="inline  px-2 cursor-pointer align-top float-left py-1-dev-span text-sm font-small">
                            <i class="far fa-play"></i>
                        </span>
                    </a>
                {{-- </form> --}}
                @endif

                @if ($project->status == 'on hold')
                    <span class="text-blue-600 cursor-pointer inline px-2 align-top float-left py-1-dev-span text-sm font-small">
                        <i class="fal fa-pause"></i>
                    </span>     
                @else
                    <span class="inline cursor-pointer px-2 align-top float-left py-1-dev-span text-sm font-small">
                        <i class="fal fa-pause"></i>
                    </span>                
                @endif
                    <a href="{{url('manager/project/delete/'.$project->id)}}">
                        <span class="inline hover:text-red-600 cursor-pointer px-2 align-top float-left py-1-dev-span text-sm font-small">
                            <i class="fal fa-trash"></i></a>
                        </span>
                    </a>
                    <a href="{{url('manager/project/edit/'.$project->id)}}">
                        <span class="inline hover:text-blue-600 cursor-pointer px-2 align-top float-left py-1-dev-span text-sm font-small">
                            <i class="fal fa-edit"></i>
                        </span> 
                    </a>
                
                @if ($project->status == 'completed')
                    <span class="capitalize rounded-md inline align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100">{{$project->status}}</span>
                @elseif ($project->status == 'pending')
                    <span class="capitalize rounded-md inline align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-orange-700 bg-orange-100 dark:bg-green-700 dark:text-green-100">{{$project->status}}</span>
                @elseif ($project->status == 'on hold')
                    <span class="capitalize rounded-md inline align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-blue-700 bg-blue-100 dark:bg-blue-500 dark:text-blue-100">{{$project->status}}</span>
                @elseif ($project->status == 'canceled')
                    <span class="capitalize rounded-lg inline align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-red-700 bg-red-100 dark:bg-red-600 dark:text-red-100">{{$project->status}}</span>
                @elseif ($project->status == 'start')
                    <span class="capitalize rounded-md inline align-top float-right px-2 py-1-dev-span text-sm font-small leading-tight text-purple-700 bg-purple-100 dark:bg-purple-500 dark:text-purple-100">{{$project->status}}</span>
                @endif
            </p>
        </div>
      </div>          
      @endforeach
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script>
          
          function dosomething(id){
                    console.log(id);
                    status = 'start';
                    $.ajax({
                      type : "POST",
                      dataType : "json",
                      url : "manager/project/statusupdate/"+id,
                    //   data:{'status': 'start', 'id': id},
                      success: function(data){
                          console.log(data.success);
                      }                      
                    })
}
        //   $(function(){
        //       $('.start-status').click(function(){
        //         //   var status = $(this).data('start');
        //           var project_id = $(this).value('id');
        //           $.ajax({
        //               type : "GET",
        //               dataType : "json",
        //               url : "manager/project/statusupdate",
        //               data:{'status': 'start', 'id': project_id},
        //               success: function(data){
        //                   console.log(data.success);
        //               }                      
        //           })

        //       })
        //   });
      </script>
    </div>
</div>
@endsection

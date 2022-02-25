@extends('Profile.layouts.app')
@section('content')
<div class="container px-6 mx-auto grid">
    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <div class="bg-white p-3 h-8/1 rounded-lg dark:bg-gray-800 dark:text-gray-400 dark:border-gray-800 shadow-xl">
                    <div class="text-right text-sm text-gray-600 dark:text-gray-400">
                        <a href=""><i class="fal fa-pen inline"></i></a>
                    </div>

                    <div class="image overflow-hidden">
                        <img class="w-40 h-40 rounded-full mx-auto"  src="{{asset('storage/'.$profileDetails->image)}}" alt="">                            
                    </div>
                    <div class="relative">
                        <div class="absolute bottom-4 right-16 h-5 w-5 border-2 border-white dark:border-gray-700 rounded-full bg-green-500 z-2"></div>
                    </div>
                    
                    <h1 class="text-gray-800 font-semibold  dark:text-gray-200 text-center text-xl leading-8 mt-1 text-limite-line-1">{{ Auth::user()->name  }}</h1>
                    {{-- <i class="fas fa-badge-check text-xs text-blue-500"></i> --}}
                    {{-- <span class="rounded-lg px-1 border border-red-500 bg-red-50 text-red-600 position-tag">PM</span> --}}
                    <h3 class="text-sm font-lg text-gray-600 dark:text-gray-400 text-limite-line-1 text-center">{{ $profileDetails->designation }}</h3>
                        <p class="text-sm text-center text-gray-400 dark:text-gray-400 text-limite-line-1">Joined {{ $profileDetails->start_date }}</p>
                        @if($achimentPoints->points >= 500)
                        <p class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                              </svg>
                            <span class="text-xs text-gray-400 dark:text-gray-400">
                                @if ($achimentPoints->points < 1)
                                    0
                                @else                                
                                {{$achimentPoints->points}}</span>
                                @endif
                        </p>
                        @elseif ($achimentPoints->points >=1000)
                        <p class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                              </svg>
                            <span class="text-xs text-gray-400 dark:text-gray-400">
                                @if ($achimentPoints->points < 1)
                                    0
                                @else                                
                                {{$achimentPoints->points}}</span>
                                @endif
                        </p>
                        @elseif ($achimentPoints->points < 500)
                        <p class="text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                              </svg>
                            <span class="text-xs text-gray-400 dark:text-gray-400">
                                @if ($achimentPoints->points < 1)
                                    0
                                @else                                
                                {{$achimentPoints->points}}</span>
                                @endif
                        </p>
                        @endif
                        <div class="text-center mt-2 text-lg text-gray-600 dark:text-gray-400">
                            <a href="" class="mr-3"><i class="fab fa-instagram"></i></a>
                            <a href="" class="mr-3"><i class="fab fa-linkedin"></i></a>
                            <a href="" class=""><i class="fab fa-facebook"></i></a>
                        </div>
                 </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Details card -->
                <div class="rounded-xl bg-white shadow-xl h-60 dark:bg-gray-800 text-gray-600 dark:text-gray-400 dark:border-gray-800 p-3">
                    <div class="flex items-center space-x-3 font-semibold text-gray-800 text-xl leading-8">
                        <span class="text-red-500 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                        </span>
                        <span class="dark:text-gray-200">Projects</span>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="text-center my-2">
                            <img class="h-13 w-13 rounded-full mx-auto object-cover"
                                src="https://webneel.net/image/logo/3-bird-transparent-logo-design-by-ilyaschapko.gif"
                                alt="">
                            <a href="#" class="text-limite-line-1">Infocliq Admin</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-13 w-13 rounded-full mx-auto object-cover"
                                src="https://webneel.net/image/logo/7-bird-transparent-logo-design-idea-by-ilya-schapko.gif"
                                alt="">
                            <a href="#" class="text-main-color text-limite-line-1">Sports clup management system</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-13 w-13 rounded-full mx-auto object-cover"
                                src="https://webneel.net/image/logo/6-bird-transparent-logo-design-idea-by-ilya-schapko.gif"
                                alt="">
                            <a href="#" class="text-main-color text-limite-line-1">Natie</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-13 w-13 rounded-full mx-auto object-cover"
                                src="https://i.pinimg.com/originals/83/f6/e8/83f6e8aabfd9e060b65b791ab2b7e10b.jpg"
                                alt="">
                            <a href="#" class="text-main-color text-limite-line-1">Casey</a>
                        </div>
                    </div>
                </div>
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 h-8/1 rounded-xl dark:bg-gray-800 text-gray-600 dark:text-gray-400 dark:border-gray-800 shadow-xl">
                    <div class="items-center space-x-2 font-semibold text-gray-600 dark:text-gray-200 leading-8 ">
                        <span clas="text-green-500">
                            <svg class="h-5 inline mb-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>  
                        <a href=""><i class="fal fa-pen inline float-right text-sm dark:text-gray-400"></i></a>                      
                    </div>
                    <div class="text-gray-500 dark:text-gray-400">
                        <div class="grid md:grid-cols-1 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-2 py-2 font-semibold">First Name</div>
                                <div class="px-2 py-2">{{ $profileDetails->first_name }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-2 py-2 font-semibold">Last Name</div>
                                <div class="px-2 py-2">{{ $profileDetails->last_name }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-2 py-2 font-semibold">Gender</div>
                                <div class="px-2 py-2">{{ $profileDetails->gender }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-2 py-2 font-semibold">Contact No.</div>
                                <div class="px-2 py-2">{{ $profileDetails->mobile_number }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-2 py-2 font-semibold">Current Address</div>
                                <div class="px-2 py-2">{{ $profileDetails->address }}, {{ $profileDetails->city }}, {{ $profileDetails->district }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-2 py-2 font-semibold">Department</div>
                                <div class="px-2 py-2">{{ $profileDetails->department }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-2 py-2 font-semibold">Email.</div>
                                <div class="px-2 py-2">
                                    <a class="hover:text-blue-800" href="mailto:{{ Auth::user()->email }}">{{ Auth::user()->email }} <i class="far fa-external-link text-xs"></i></a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-2 py-1 font-semibold">Birthday</div>
                                <div class="px-2 py-1">{{ $profileDetails->date_of_birth }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div class="bg-white p-3 h-60 rounded-xl dark:bg-gray-800 text-gray-600 dark:text-gray-400 dark:border-gray-800 shadow-xl">

                    <div class="grid grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-800 dark:text-gray-200 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Recent tasks</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li class="py-1">
                                    <div class="text-teal-600 text-limite-line-1">Design and develop home page</div>
                                    <div class="text-gray-500 text-xs">Jan 29 2021 - Today</div>
                                </li>
                                <li class="py-1">
                                    <div class="text-teal-600 text-limite-line-1">Design and develop home page</div>
                                    <div class="text-gray-500 text-xs">Jan 29 2021 - Today</div>
                                </li>
                                <li class="py-1">
                                    <div class="text-teal-600 text-limite-line-1">Design and develop home page</div>
                                    <div class="text-gray-500 text-xs">Jan 29 2021 - Today</div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-800 dark:text-gray-200 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                      </svg>
                                </span>
                                <span class="tracking-wide">Ongoing projects</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li class="py-2">
                                    <div class="text-teal-600 text-limite-line-1">Infocliq admin and project management</div>
                                    <div class="text-gray-500 text-xs">Start - Jan 25 2022</div>
                                </li>
                                <li class="py-2">
                                    <div class="text-teal-600 text-limite-line-1">Sports club management system</div>
                                    <div class="text-gray-500 text-xs">Start - Jan 25 2022</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</div>
@endsection
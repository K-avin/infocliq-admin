<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <a class="ml-6 text-lg font-semibold text-gray-800 dark:text-white" href="#">
      <img class="inline object-cover w-6 h-6 rounded-full mb-1" src="{{asset('img/logo.png')}}" alt="" aria-hidden="true"/>
      infocliq
    </a>
    <ul class="mt-6">
      <li class="relative px-6 py-3">
        <span class="{{ Request::segment(2) === 'dashboard' ? 'bg-red-500 absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg' : null }}" aria-hidden="true"></span>
        <a class="{{ Request::segment(2) === 'dashboard' ? 'text-gray-800 dark:text-gray-100' : null }} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="{{route('view.dashboard')}}">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path
              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
            </path>
          </svg>
          <span class="ml-4">Dashboard</span>
        </a>
      </li>
    </ul>

    <ul>
      <li class="relative px-6 py-3">
        <span class="{{ Request::segment(2) === 'mytasks' ? 'bg-red-500 absolute inset-y-0 left-0 w-1  rounded-tr-lg rounded-br-lg' : null }}
        {{ Request::segment(2) === 'addtask' ? 'bg-red-500 absolute inset-y-0 left-0 w-1  rounded-tr-lg rounded-br-lg' : null }}" aria-hidden="true"></span>
        <a href="{{route('view.tasks')}}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150  hover:text-gray-800 dark:hover:text-gray-200">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
            </svg>
          <span class="ml-4">Tasks</span>
        </a>
      </li>
    </ul>

    <ul>
      <li class="relative px-6 py-3">
        <span class="{{ Request::segment(2) === 'projects' ? 'bg-red-500 absolute inset-y-0 left-0 w-1  rounded-tr-lg rounded-br-lg' : null }}
        {{ Request::segment(2) === 'addproject' ? 'bg-red-500 absolute inset-y-0 left-0 w-1  rounded-tr-lg rounded-br-lg' : null }}
        {{ Request::segment(3) === 'details' ? 'bg-red-500 absolute inset-y-0 left-0 w-1  rounded-tr-lg rounded-br-lg' : null }}
        " aria-hidden="true"></span>
        <a href="{{route('view.projects')}}" class="{{ Request::segment(2) === 'projects' ? 'text-gray-800 dark:text-gray-100' : null }} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="modals.html">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path
                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
              </path>
            </svg>
          <span class="ml-4">Projects</span>
        </a>
      </li>
    </ul>

    <ul>
      <li class="relative px-6 py-3">
        <span class="{{ Request::segment(2) === 'employees' ? 'bg-red-500 absolute inset-y-0 left-0 w-1  rounded-tr-lg rounded-br-lg' : null }}
        {{ Request::segment(2) === 'addemployee' ? 'bg-red-500 absolute inset-y-0 left-0 w-1  rounded-tr-lg rounded-br-lg' : null }}
        " aria-hidden="true"></span>
        <a href="{{route('view.employees')}}" class="{{ Request::segment(2) === 'employees' ? 'text-gray-800 dark:text-gray-100' : null }} inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="modals.html">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
            </svg>
          <span class="ml-4">Staffs</span>
        </a>
      </li>
    </ul>

    <ul>
      <li class="relative px-6 py-3">
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="">
          <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <span class="ml-4">Settings</span>
        </a>
      </li>
    </ul>

  </div>
</aside>
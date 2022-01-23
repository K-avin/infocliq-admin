@extends('layouts.app')
@section('content')
<div class="container px-6 mx-auto grid">
  <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    Staffs
  </h2>
  {{-- add staff --}}
  <a href="{{route('add.employee')}}" class="dark:bg-gray-800 dark:text-gray-400 dark:border-gray-800 flex items-center justify-between p-4 mb-8 text-sm font-semibold bg-white text-gray-600 border-gray-200 border rounded-lg shadow-sm focus:outline-none focus:shadow-outline-purple">
    <div class="flex items-center">
        <svg  xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span>Add New Staff</span>
      </div>
      <span class="text-green-500">Add hear &RightArrow;</span>
</a>

  <!-- New Table -->
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <thead>
          <tr
            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
          >
            <th class="px-4 py-3">Profile</th>            
            <th class="px-4 py-3">EStatus</th>
            <th class="px-4 py-3">RStatus</th>
            <th class="px-4 py-3">Gender</th>
            <th class="px-4 py-3">Designation</th>
            <th class="px-4 py-3">Nic</th>
            <th class="px-4 py-3">Mobile</th>
            <th class="px-4 py-3">Salary</th>
            <th class="px-4 py-3">DoB</th>            
            <th class="px-4 py-3">SDate</th>
            <th class="px-4 py-3">Action</th>
          </tr>
        </thead>
        <tbody
          class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
        >
        @foreach ($employees as $employee)
          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3">
              <div class="flex items-center text-sm">
                <!-- Avatar with inset shadow -->
                <div
                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                >
                  <img
                    class="object-cover w-full h-full rounded-full"
                    src="{{asset('storage/'.$employee->image)}}"
                    alt=""
                    loading="lazy"
                  />
                  <div
                    class="absolute inset-0 rounded-full shadow-inner"
                    aria-hidden="true"
                  ></div>
                </div>
                <div>
                  <p class="font-semibold">{{$employee->first_name}} {{$employee->last_name}}</p>
                  <p class="text-xs text-gray-600 dark:text-gray-400">
                    10x Developer
                  </p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-sm">
                {{$employee->employment_status}}
              </td>
              
            <td class="px-4 py-3 text-sm">
                {{$employee->status}}
              </td>
              
            <td class="px-4 py-3 text-sm">
                {{$employee->gender}}
              </td>

              <td class="px-4 py-3 text-xs">
                <span
                  class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                >
                  {{$employee->designation}}
                </span>
              </td>
              
            <td class="px-4 py-3 text-sm">
                {{$employee->nic_number}}
              </td>
              
            <td class="px-4 py-3 text-sm">
                {{$employee->mobile_number}}
              </td>
              
            <td class="px-4 py-3 text-sm">
                GM
              </td>
              
            <td class="px-4 py-3 text-sm">
                Rs.{{$employee->salary}}
              </td>
            <td class="px-4 py-3 text-sm">
              {{$employee->date_of_birth}}
            </td>
            <td class="px-4 py-3 text-sm">
                {{$employee->start_date}}
              </td>
              <td class="px-4 py-3 text-sm">
                <a class="text-blue-600 font-semibold mr-1" href="#">Edit</a>
                <a class="text-red-600 font-semibold" href="#">Delete</a>
              </td>
          </tr>            
        @endforeach
        </tbody>
      </table>
    </div>
    <div
      class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
    >
      <span class="flex items-center col-span-3">
        Showing 21-30 of 100
      </span>
      <span class="col-span-2"></span>
      <!-- Pagination -->
      <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
        <nav aria-label="Table navigation">
          <ul class="inline-flex items-center">
            <li>
              <button
                class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-red"
                aria-label="Previous"
              >
                <svg
                  aria-hidden="true"
                  class="w-4 h-4 fill-current"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                  ></path>
                </svg>
              </button>
            </li>
            <li>
              <button
                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red"
              >
                1
              </button>
            </li>
            <li>
              <button
                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red"
              >
                2
              </button>
            </li>
            <li>
              <button
                class="px-3 py-1 text-white transition-colors duration-150 bg-red-500 border border-r-0 border-red-600 rounded-md focus:outline-none focus:shadow-outline-red"
              >
                3
              </button>
            </li>
            <li>
              <button
                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red"
              >
                4
              </button>
            </li>
            <li>
              <span class="px-3 py-1">...</span>
            </li>
            <li>
              <button
                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red"
              >
                8
              </button>
            </li>
            <li>
              <button
                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-red"
              >
                9
              </button>
            </li>
            <li>
              <button
                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-red"
                aria-label="Next"
              >
                <svg
                  class="w-4 h-4 fill-current"
                  aria-hidden="true"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                  ></path>
                </svg>
              </button>
            </li>
          </ul>
        </nav>
      </span>
    </div>
  </div>
</div>
@endsection

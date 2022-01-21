@extends('layouts.app')
@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2md font-semibold text-gray-700 dark:text-gray-200">Add New Project</h2>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      {{-- Client --}}
      <div class="client-section mb-10">
        <p class="mb-3 mt-3 text-2md font-semibold text-gray-500 dark:text-gray-200">Client Details</p>
      <div class="grid gap-6 xl:grid-cols-2 mb-4"> 
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Name</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the client full name" />
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Mobile Number</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the mobile number"
            type="phone"/>
        </label>
      </div>
      <div class="grid gap-6 xl:grid-cols-2 mb-4"> 
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Company Name</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the company name" />
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Address</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the address"
            type="text"/>
        </label>
      </div>
      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">Description</span>
        <textarea
          class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
          rows="3" placeholder="Enter some descriptions about client"></textarea>
      </label>
      </div>

      {{-- Project --}}      
      <div class="project-section">
        <p class="mb-3 mt-3 text-2md font-semibold text-gray-500 dark:text-gray-200">Project Details</p>
      <div class="grid gap-6 xl:grid-cols-2 mb-4"> 
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Project Name</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the project name" />
        </label>

        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Due Date</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="date"
            type="date"/>
        </label>
      </div>

      <div class="grid gap-6 xl:grid-cols-2 mb-4"> 
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Total Coast</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the total cost" />
        </label>

        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Total Hours</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Jane Doe"
            type="time"/>
        </label>
      </div>      

      <div class="mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Developers
        </span>
        <div class="mt-2">
          <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
            <input type="checkbox"
              class="text-gray-600 form-checkbox focus:border-gray-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              name="accountType" value="id" />
            <span class="ml-2">Kabilraj</span>
          </label>
          <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
            <input type="checkbox"
              class="text-gray-600 form-checkbox focus:border-gray-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              name="accountType" value="id" />
            <span class="ml-2">Vinoyan</span>
          </label>
        </div>
      </div>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">Project Description</span>
        <textarea
          class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
          rows="3" placeholder="Enter the project descriptions"></textarea>
      </label>
      </div>

      <div class="flex mt-8 mb-2 flex-col flex-wrap space-y-2 md:flex-row md:items-end md:space-x-4">
        <!-- Divs are used just to display the examples. Use only the button. -->
        <div>
          <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-green-600 transition-colors duration-150  border border-green-600 rounded-md active:bg-green-700 active:text-white hover:bg-green-600 hover:text-white focus:outline-none focus:shadow-outline-purple">
            <span>Create</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </button>
        </div>

        <!-- Divs are used just to display the examples. Use only the button. -->
        <div>
          <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-red-600 transition-colors duration-150  border border-red-600 rounded-md active:red-green-700 active:text-white hover:bg-red-600 hover:text-white focus:outline-none focus:shadow-outline-purple">
            <span>Cancel</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    
    
</div>
@endsection

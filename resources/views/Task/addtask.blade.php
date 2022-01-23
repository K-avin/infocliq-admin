@extends('layouts.app')
@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2md font-semibold text-gray-700 dark:text-gray-200">Add New Task</h2>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      {{-- Task form --}}
      <div class="client-section mb-10"> 
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Task Name<label class="text-red-600">*</label></span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the task name" />
        </label>
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Description</span>
            <textarea
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="3" placeholder="Enter some descriptions about client"></textarea>
          </label>
        <div class="grid gap-6 xl:grid-cols-2 mb-4 mt-4"> 
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Task<label class="text-red-600">*</label></span>
            <select id='purpose'
                    class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option selected disabled>Choose a task</option>
                    <option value="1">Office task</option>
                    <option value="2">Project task</option>
                </select>
            </label>
            <div style='display:none;' id='officeT'>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Department<label class="text-red-600">*</label></span>
                <select
                      class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                      <option disabled selected>Choose a department</option>
                      <option>IT</option>
                      <option>HR</option>
                      <option>Marketting</option>
                  </select>
              </label>
            </div>
            
            <div class="grid gap-6 xl:grid-cols-2" id="projectT"> 
              <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Project<label class="text-red-600">*</label></span>
              <select
                      class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                      <option>Sport club management system</option>
                      <option>Bus ticket booking system</option>
                  </select>
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Module<label class="text-red-600">*</label></span>
                <select
                        class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option>M001-Home-Page-Design</option>
                        <option>M001-About-Page-Design</option>
                    </select>
              </label>
            </div>
        </div>      
        <div class="grid gap-6 xl:grid-cols-2 mb-4 mt-4"> 
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Task type<label class="text-red-600">*</label></span>
              <select
                    class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option disabled selected>Choose a task type</option>
                    <option>Development</option>
                    <option>Documentaion</option>
                    <option>Meeting</option>
                </select>
            </label>
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Assign to<label class="text-red-600">*</label></span>
              <select
                    class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option disabled selected>Choose a person</option>
                    <option>Kabilraj</option>
                    <option>Vinoyan</option>
                </select>
            </label>
          </div>
      </div>
      <div class="grid gap-6 xl:grid-cols-2 mb-4 mt-4"> 
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Action type<label class="text-red-600">*</label></span>
          <select
                class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <option disabled selected>Choose a type</option>
                <option>Genaral</option>
                <option>OT</option>
            </select>
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Duration (minutes)<label class="text-red-600">*</label></span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the task duration in minutes" type="number" />
        </label>
      </div>
      <div class="grid gap-6 xl:grid-cols-2 mb-4 mt-4"> 
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Due date<label class="text-red-600">*</label></span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the task duration in minutes" type="date" />
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Priority level<label class="text-red-600">*</label></span>
          <select
                class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <option disabled selected>Choose a level</option>
                <option>High</option>
                <option>Medium</option>
                <option>Low</option>
            </select>
        </label>
      </div>

      <div class="grid gap-6 xl:grid-cols-4 mb-4 mt-4"> 
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Points<label class="text-red-600">*</label></span>
          <div class="flex items-center mt-4 mb-4">
            <div x-data="
                {
                    rating: 0,
                    hoverRating: 0,
                    ratings: [{'amount': 1, 'label':'Terrible'}, {'amount': 2, 'label':'Bad'}, {'amount': 3, 'label':'Okay'}, {'amount': 4, 'label':'Good'}, {'amount': 5, 'label':'Great'}],
                    rate(amount) {
                        if (this.rating == amount) {
                    this.rating = 0;
                  }
                        else this.rating = amount;
                    },
                currentLabel() {
                   let r = this.rating;
                  if (this.hoverRating != this.rating) r = this.hoverRating;
                  let i = this.ratings.findIndex(e => e.amount == r);
                  if (i >=0) {return this.ratings[i].label;} else {return ''};     
                }
                }
                ">
                <template x-for="(star, index) in ratings" :key="index">
                    <button @click="rate(star.amount)" @mouseover="hoverRating = star.amount" @mouseleave="hoverRating = rating"
                        aria-hidden="true"
                        :title="star.label"
                        class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline cursor-pointer"
                        :class="{'text-yellow-300': hoverRating >= star.amount, 'text-yellow-400': rating >= star.amount && hoverRating >= star.amount}">
                        <svg fill="currentColor" class="transition duration-150 mx-1 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>                    
                    </button>        
                </template>            
                {{-- <div class="p-2 inline">
                <template x-if="rating || hoverRating">
                      <p x-text="currentLabel()"></p>
                </template>
                </div> --}}
            
            </div>
          </div>
        </label>
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Attachment<label class="text-red-600">*</label></span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray"
            placeholder="Enter the task duration in minutes" type="file" />
        </label>
      </div>

      
      <!-- component -->
<!-- This is an example component -->

  {{-- <label class="block">
    <span class="text-gray-600 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
          </svg>
        Attach
    </span>
    <input type="file" class="block w-full" style="visibility: hidden"/>
  </label> --}}
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

      
    
    
</div>
@endsection

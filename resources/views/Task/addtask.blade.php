@extends('layouts.app')
@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2md font-semibold text-gray-700 dark:text-gray-200">Add New Task</h2>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <form action="{{route('store.task')}}" method="post" enctype="multipart/form-data">
        @csrf
        {{-- Task form --}}
        <div class="client-section mb-4"> 
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Task Name<label class="text-red-600">*</label></span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Enter the task name"
                name="task_name"/>
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3" name="description" placeholder="Enter some descriptions about client"></textarea>
              </label>
            <div class="grid gap-6 xl:grid-cols-2 mb-4 mt-4"> 
                <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Task<label class="text-red-600">*</label></span>
                <select id='purpose' name="task"
                        class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option selected disabled>Choose a task</option>
                        <option value="1">Office task</option>
                        <option value="2">Project task</option>
                    </select>
                </label>
                <div style='display:none;' id='officeT'>
                  <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Department<label class="text-red-600">*</label></span>
                    <select name="department" aria-selected="wo"
                          class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                          <option value="nullz"  selected>Choose a department</option>
                          <option>IT</option>
                          <option>HR</option>
                          <option>Marketting</option>
                      </select>
                  </label>
                </div>
                
                <div class="grid gap-6 xl:grid-cols-2" id="projectT"> 
                  <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Project<label class="text-red-600">*</label></span>
                  <select name="project"
                          class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                          <option value="1">Sport club management system</option>
                          <option value="2">Bus ticket booking system</option>
                      </select>
                  </label>
                  <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Module<label class="text-red-600">*</label></span>
                    <select name="module"
                            class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="1">M001-Home-Page-Design</option>
                            <option value="2">M001-About-Page-Design</option>
                        </select>
                  </label>
                </div>
            </div>      
            <div class="grid gap-6 xl:grid-cols-2 mb-4 mt-4"> 
                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Task type<label class="text-red-600">*</label></span>
                  <select name="task_type"
                        class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option disabled selected>Choose a task type</option>
                        <option>Development</option>
                        <option>Documentaion</option>
                        <option>Meeting</option>
                    </select>
                </label>
                <label class="block text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Assign to<label class="text-red-600">*</label></span>
                  <select name="assign_to"
                        class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                        <option disabled selected>Choose a person</option>
                        <option value="1">Kabilraj</option>
                        <option value="2">Vinoyan</option>
                    </select>
                </label>
              </div>
          </div>
          <div class="grid gap-6 xl:grid-cols-2 mb-4 mt-4"> 
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Due date<label class="text-red-600">*</label></span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Enter the task duration in minutes"
                type="date"
                name="due_date"/>
            </label>
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Duration (<span id="showTime">minutes</span>)<label class="text-red-600">*</label></span>
              <input
                oninput="timeConvert()"
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Enter the task duration in minutes"
                type="number"
                name="duration_minutes"
                id="minId"/>
                <input style="display: none"  name="duration_hours" type="text" id="timeTask"  value="">
            </label>
          </div>
          <div class="grid gap-6 xl:grid-cols-2 mb-4 mt-4"> 
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Priority level<label class="text-red-600">*</label></span>
              <select name="priority"
                    class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                    <option disabled selected>Choose a level</option>
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>
            </label>
            <div class="grid gap-6 xl:grid-cols-2"> 
              <label class="block text-sm">
                <span class="mb-4 text-gray-700 dark:text-gray-400">Points<label class="text-red-600">*</label></span>
                <div class="flex items-center mt-4">
                  <div x-data="
                      {
                          rating: 0,
                          hoverRating: 0,
                          ratings: [{'amount': 1, 'label':1}, {'amount': 2, 'label': 2}, {'amount': 3, 'label':3}, {'amount': 4, 'label':4}, {'amount': 5, 'label':5}],
                          rate(amount) {
                              if (this.rating == amount) {
                          this.rating = 0;
                        }
                              else this.rating = amount;
                          },
                      currentLabel() {
                          let r = this.rating;
                          if (this.hoverRating != this.rating) 
                          r = this.hoverRating;
                          let i = this.ratings.findIndex(e => e.amount == r);
                          if (i >=0) {return this.ratings[i].label;} else {return ''};     
                        }
                      }
                      ">
                      <template x-for="(star, index) in ratings" :key="index">
                          <button @click="rate(star.amount)" @mouseover="hoverRating = star.amount" @mouseleave="hoverRating = rating"
                              aria-hidden="true"
                              :title="star.label"
                              type="button"
                              class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline cursor-pointer"
                              :class="{'text-yellow-300': hoverRating >= star.amount, 'text-yellow-400': rating >= star.amount && hoverRating >= star.amount}">
                              <svg fill="currentColor" class="transition duration-150 mx-1 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>                    
                          </button>        
                      </template>            
                      <template x-if="rating">
                        <input style="display: none" :value="currentLabel()" name="points" >
                      </template>
                  
                  </div>
                </div>
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Attachment<label class="text-red-600">*</label></span>
                <input
                  class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray"
                  placeholder="Enter the task duration in minutes" name="attachment" type="file" />
              </label>
            </div>
          </div>
          
          <div class="flex mt-6 mb-2 flex-col flex-wrap space-y-2 md:flex-row md:items-end md:space-x-4">
            <!-- Divs are used just to display the examples. Use only the button. -->
            <div>
              <button type="submit" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-green-600 transition-colors duration-150  border border-green-600 rounded-md active:bg-green-700 active:text-white hover:bg-green-600 hover:text-white focus:outline-none focus:shadow-outline-purple">
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
      </form>
  </div>
</div>
@endsection

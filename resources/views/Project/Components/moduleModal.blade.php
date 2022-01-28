{{-- <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal"
      @keydown.escape="closeModal"
      class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
      role="dialog" id="modal">
      <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="w-14 h-14 rounded-2xl p-3 text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <div class="flex flex-col ml-3">
            <div class="font-medium leading-none dark:text-gray-200">Delete Your Acccount ?</div>
            <p class="text-sm text-gray-600 leading-none mt-1 dark:text-gray-400">By deleting your account you will lose your all data
            </p>
          </div>
        </div>
        <button  class="flex-no-shrink bg-red-500 dark:bg-red-600  px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider text-white rounded-full">Delete</button>
      </div>
    </div>
  </div> --}}

  <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal"
      @keydown.escape="closeModal"
      class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
      role="dialog" id="modal">
      <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
      <div class="items-center h-20 justify-between">
        <form action="{{route('store.module')}}" method="post" enctype="multipart/form-data">
          @csrf
            <input type="number" name="projectId" value="{{$project->id}}" style="display: none">
            <label class="inline text-sm">
              <span class="text-gray-700 block dark:text-gray-400">Module Name</span>
              <input
                class="inline w-tx-box mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Enter the module name or title"
                name="moduleName"
                type="text"/>
            </label>
            <button type="submit"  class="flex-no-shrink  rounded-full bg-red-500 dark:bg-red-600 mt-2  px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider text-white">Add</button>
        </form>
      </div>
    </div>
  </div>
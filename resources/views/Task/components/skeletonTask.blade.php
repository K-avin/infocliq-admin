<div class="taskSketole">
  <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-3">
    @foreach ($tasks as $task)
    <div class="rounded-xl shadow-xl h-50 p-4 max-w-sm w-full mx-auto">
      <div class="flex animate-pulse items-center justify-between">
        <div class="flex items-center">
          <div class="rounded-full bg-gray-200 dark:bg-gray-100 h-10 w-10">
          </div>

          <div class="bg-gray-200 dark:bg-gray-100 rounded w-15 h-2 ml-4"></div>
        </div>
        <div class="flex items-center space-x-4">
          <div class="bg-gray-200 dark:bg-gray-100 rounded w-8 h-2 ml-4">
          </div>

          <span class="bg-gray-200 dark:bg-gray-100 rounded w-12 h-2"></span>

          <div class="cursor-pointer">
            <div class="rounded-full bg-gray-200 dark:bg-gray-100 h-5 w-5"></div>
          </div>
        </div>
      </div>
      <div class="mt-3 animate-pulse text-gray-200 dark:bg-gray-100 font-normal text-sm">
        <div class="grid grid-cols-6 gap-4 mb-4">
          <div class="h-2 bg-gray-200 rounded col-span-2"></div>
          <div class="h-2 bg-gray-200 rounded col-span-3"></div>
        </div>
        <div class="grid grid-cols-6 gap-4 mb-4">
          <div class="h-2 bg-gray-200 dark:bg-gray-100 rounded col-span-2"></div>
          <div class="h-2 bg-gray-200 dark:bg-gray-100 rounded col-span-2"></div>
        </div>
        <div class="grid grid-cols-6 gap-4 mb-2">
          <div class="h-2 bg-gray-200 dark:bg-gray-100 rounded col-span-6"></div>
        </div>
        <div class="grid grid-cols-6 gap-4 mb-4">
          <div class="h-2 bg-gray-200 dark:bg-gray-100 rounded col-span-6"></div>
        </div>
        <div class="grid grid-cols-12  mt-8">
          <div class="rounded-full bg-gray-200 dark:bg-gray-100 h-3 w-5"></div>
          <div class="rounded-full bg-gray-200 dark:bg-gray-100 h-3 w-5"></div>
          <div class="rounded-full bg-gray-200 h-3 w-5"></div>
          <div class="rounded-full bg-gray-200 dark:bg-gray-100 h-3 w-5"></div>
          <div class="rounded-full bg-gray-200 dark:bg-gray-100 h-3 w-5"></div>
          <div class="rounded-full bg-gray-200 dark:bg-gray-100 h-3 w-20 ml-20"></div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
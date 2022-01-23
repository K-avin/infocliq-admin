@extends('layouts.app')
@section('content')
<div class="container px-6 mx-auto grid">
  <h2 class="my-6 text-2md font-semibold text-gray-700 dark:text-gray-200">Add New Staff</h2>

  <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <form action="{{route('store.employee')}}" method="post" enctype="multipart/form-data">
      @csrf
      {{-- Personal --}}
      <div class="personal-section mb-10">
        <p class="mb-3 mt-3 text-2md font-semibold text-gray-500 dark:text-gray-200">Personal Details</p>
        <div class="grid gap-6 xl:grid-cols-2 mb-4">
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">First Name</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the first name"
              type="text"
              name="firstname"/>
          </label>
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Last Name</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the last name" 
              type="text"
              name="lastname" />
          </label>
        </div>
        <div class="grid gap-6 xl:grid-cols-2 mb-4">
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">NIC Number</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the nic number" 
              type="tel"
              name="nic" />
          </label>
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Mobile Number</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the mobile number"
              type="tel"
              name="mobile"/>
          </label>
        </div>
        <div class="grid gap-6 xl:grid-cols-2 mb-4">
          <div class="grid gap-6 xl:grid-cols-3">
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Provence</span>
              <select
                class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray"
                name="provence"
                >
                <option disabled selected>--- Select ---</option>
                <option>Northen</option>
                <option>Center</option>
                <option>Weston</option>
              </select>
            </label>
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">District</span>
              <select
                class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray"
                name="district"
                >
                <option disabled selected>--- Select ---</option>
                <option>Vavuniya</option>
                <option>Jaffna</option>
                <option>Mannar</option>
              </select>
            </label>
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">City</span>
              <select
                class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray"
                name="city">
                <option disabled selected>--- Select ---</option>
                <option>Vavuniya</option>
                <option>Mankulam</option>
                <option>Mulaitheevu</option>
              </select>
            </label>
          </div>
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Address</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the address"
              type="text"
              name="address" />
          </label>
        </div>

        <div class="grid gap-6 xl:grid-cols-2 mb-4">
          <div class="grid gap-6 xl:grid-cols-2">
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Male / Female</span>
              <div class="mt-1 form-input dark:border-gray-600 dark:bg-gray-700">
                <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                  <input type="checkbox"
                    class="text-gray-600 form-checkbox focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray"
                    value="male"
                    name="gender"/>
                  <span class="ml-2">Male</span>
                </label>
                <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                  <input type="checkbox"
                    class="text-gray-600 form-checkbox focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray"
                    value="female"
                    name="gender" />
                  <span class="ml-2">Female</span>
                </label>
              </div>
            </label>

            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Status</span>
              <div class="mt-1 form-input dark:border-gray-600 dark:bg-gray-700">
                <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                  <input type="checkbox"
                    class="text-gray-600 form-checkbox focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray"
                    value="single"
                    name="status" />
                  <span class="ml-2">Single</span>
                </label>
                <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                  <input type="checkbox"
                    class="text-gray-600 form-checkbox focus:border-gray-400 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray"
                    value="married"
                    name="status" />
                  <span class="ml-2">Married</span>
                </label>
              </div>
            </label>
          </div>

          <div class="grid gap-6 xl:grid-cols-2">
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Date of Birth</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="date"
                name="dob" />
            </label>
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Image</span>
              <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="file"
                name="image" />
            </label>
          </div>
        </div>
      </div>

      {{-- Position --}}
      <div class="position-section mb-10">
        <p class="mb-3 mt-3 text-2md font-semibold text-gray-500 dark:text-gray-200">Position Details</p>
        <div class="grid gap-6 xl:grid-cols-2 mb-4">
          <div class="grid gap-6 xl:grid-cols-2 mb-4">
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Designation</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the position"
              name="designation" />
          </label>
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Department</span>
            <select
              class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray"
              name="department">
              <option disabled selected>--- Select ---</option>
              <option>Iinformation Techology</option>
              <option>Human Resource</option>
              <option>Marketting</option>
            </select>
          </label>
          </div>

          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Employment Status</span>
            <select
              class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray"
              name="estatus">
              <option disabled selected>--- Select ---</option>
              <option>Full time</option>
              <option>Part time</option>
              <option>Temporary</option>
              <option>Outsource</option>
            </select>
          </label>
        </div>

        <div class="grid gap-6 xl:grid-cols-2 mb-4">
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Start Date</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              type="date"
              name="startdate" />
          </label>

          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Salary Per Month</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the salary per month"
              type="number"
              name="salary"/>
          </label>
        </div>
      </div>

      {{-- Bank --}}
      <div class="bank-section mb-10">
        <p class="mb-3 mt-3 text-2md font-semibold text-gray-500 dark:text-gray-200">Bank Details </p>
        <div class="grid gap-6 xl:grid-cols-2 mb-4">
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Bank</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the bank name"
              type="text"
              name="bank"/>
          </label>

          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Branch</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the bank branch"
              type="text"
              name="branch"/>
          </label>
        </div>

        <div class="grid gap-6 xl:grid-cols-2 mb-4">
          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Account Name</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the account name"
              type="text"
              name="accountname" />
          </label>

          <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Account Number</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              placeholder="Enter the account number"
              type="number"
              name="accountnumber"/>
          </label>
        </div>
      </div>

      <div class="flex mt-8 mb-2 flex-col flex-wrap space-y-2 md:flex-row md:items-end md:space-x-4">
        <!-- Divs are used just to display the examples. Use only the button. -->
        <div>
          <button
            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-green-600 transition-colors duration-150  border border-green-600 rounded-md active:bg-green-700 active:text-white hover:bg-green-600 hover:text-white focus:outline-none focus:shadow-outline-gray"
            type="submit">
            <span>Create</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </button>
        </div>

        <!-- Divs are used just to display the examples. Use only the button. -->
        <div>
          <button
            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-red-600 transition-colors duration-150  border border-red-600 rounded-md active:red-green-700 active:text-white hover:bg-red-600 hover:text-white focus:outline-none focus:shadow-outline-gray">
            <span>Cancel</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </form>
  </div>

  <div class="items-center p-4 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    {{-- User Account --}}
    <div class="bank-section ">
      <p class="mb-3 mt-3 text-2md font-semibold text-gray-500 dark:text-gray-200">User Account Details </p>
      <div class="grid gap-6 xl:grid-cols-2 mb-4">
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">User Name</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the user name" type="text" />
        </label>

        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Email</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            placeholder="Enter the user email" type="email" />
        </label>
      </div>
      <div class="grid gap-6 xl:grid-cols-2 mb-4">
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">User Role</span>
          <select
            class="block w-full mt-1 text-sm dark:text-gray-200 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:focus:shadow-outline-gray">
            <option disabled selected>--- Select ---</option>
            <option value="developer">Developer</option>
            <option value="pm">PM</option>
            <option value="hr">HR</option>
          </select>
        </label>

        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Passwod</span>
          <div class="flex items-center">
            <input id="password" readonly
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-gray-100 focus:outline-none focus:shadow-outline-gray dark:text-gray-300 dark:focus:shadow-outline-gray form-input rounded-r-none"
              type="text" placeholder="Generate the password" aria-label="Full name">
            <button id="button" onclick="genPassword()"
              class="dark:border-gray-600 dark:bg-gray-700 flex-shrink-0 form-input rounded-l-none rounded-r-none border-l-0 border-r-0 text-sm text-red-500 py-2 mt-1 px-2"
              type="button">
              Generate
            </button>
            <button id="button" onclick="copyPassword()"
              class="dark:border-gray-600 dark:bg-gray-700 flex-shrink-0 form-input rounded-l-none text-sm text-red-500 py-2 mt-1 px-2"
              type="button">
              Copy
            </button>
          </div>
        </label>
      </div>
    </div>      
    <div class="flex mt-4 mb-2 flex-col flex-wrap space-y-2 md:flex-row md:items-end md:space-x-4">
      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <button
          class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-green-600 transition-colors duration-150  border border-green-600 rounded-md active:bg-green-700 active:text-white hover:bg-green-600 hover:text-white focus:outline-none focus:shadow-outline-gray">
          <span>Create</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg>
        </button>
      </div>

      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <button
          class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-red-600 transition-colors duration-150  border border-red-600 rounded-md active:red-green-700 active:text-white hover:bg-red-600 hover:text-white focus:outline-none focus:shadow-outline-gray">
          <span>Cancel</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 -mr-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>


</div>
@endsection
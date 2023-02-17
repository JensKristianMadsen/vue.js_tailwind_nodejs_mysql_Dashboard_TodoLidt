<template>


<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-4 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
        <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
      </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="#" method="POST">
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-4 gap-4">
        
              <div class="col-span-1 sm:col-span-1 lg:col-span-1">
                <label for="city" class="block text-sm font-medium text-gray-700">Task</label>
                <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-1 sm:col-span-1 lg:col-span-1">
                <label for="region" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" name="region" id="region" autocomplete="address-level1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>


               <div class="col-span-1 sm:col-span-1  lg:col-span-1">
                <label for="region" class="block text-sm font-medium text-gray-700">Repeated</label>
                <input type="checkbox" name="region" id="region" autocomplete="address-level1" class="mt-1 block w-full  rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-1 sm:col-span-1 lg:col-span-1">
                <label for="country" class="block text-sm font-medium text-gray-700">Select - repeated</label>
                <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                  <option>Every day (monday to fredag)</option>
                  <option>Weekly every (select day)</option>
                  <option>Mexico</option>
                </select> </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
          </div>
          
        </div>
      </form>
    </div>
  </div>
</div>
<Button text="Add Task" color="green"/>




</template>

<script>
import Button from './Button.vue';

    export default {
        name: 'AddTask',
        components: {
          Button
        }
    }

</script>
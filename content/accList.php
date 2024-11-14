
<div class="mb-5 container mx-auto p-5">
    
<div class="pb-3  flex justify-between items-center">
        <h1 class="text-2xl font-semibold ">Account List</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 " style="color: var(--text-breadcrumbs-color);">/</span>
            <span class="" style="color: var(--text-breadcrumbs-color);">Account List</span>
        </nav>
    </div>

    <!-- <div class="overflow-x-auto border-2 border-gray-300 rounded-lg">
        <table class="min-w-full bg-white">
          <thead class="">
            <tr class="bg-gray-300 text-gray-700 uppercase text-xs leading-normal">
              <th class="py-3 px-6 text-left">Account Number</th>
              <th class="py-3 px-6 text-left">Type</th>
              <th class="py-3 px-6 text-left">Leverage</th>
              <th class="py-3 px-6 text-left">Balance</th>
              <th class="py-3 px-6 text-left">Equity</th>
              <th class="py-3 px-6 text-center">Actions</th>
            </tr>
          </thead>
          <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
              <td class="py-3 px-6 text-left text-blue-600">
                <a href="#">135377</a>
              </td>
              <td class="py-3 px-6 text-left">BASIC</td>
              <td class="py-3 px-6 text-left">1:500</td>
              <td class="py-3 px-6 text-left text-green-500 font-semibold">23207</td>
              <td class="py-3 px-6 text-left text-green-500 font-semibold">23207</td>
              <td class="py-3 px-6 text-center">
                <div class="flex item-center justify-center space-x-2">
                  <button onclick="alert('View Account')" class="text-blue-500 hover:text-blue-700"><i>&#x1F50D;</i></button>
                  <button onclick="alert('Transfer Funds')" class="text-blue-500 hover:text-blue-700"><i>&#x1F4B5;</i></button>
                  <button onclick="alert('Edit Account')" class="text-blue-500 hover:text-blue-700"><i>&#9881;</i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div> -->

     <!-- table test start  -->
     <div class="overflow-x-auto border border-gray-300 rounded-lg shadow-lg" >
  <table class="min-w-full rounded-sm" style="background-color: var( --card-bg-color); color: var(--text-color);">
    <thead style="background-color: var(--bg-list); ">
      <tr class=" uppercase text-xs font-semibold leading-normal" tyle="color: var(--text-color);">
        <th class="py-3 px-6 text-left">Account Number</th>
        <th class="py-3 px-6 text-left">Type</th>
        <th class="py-3 px-6 text-left">Leverage</th>
        <th class="py-3 px-6 text-left">Balance</th>
        <th class="py-3 px-6 text-left">Equity</th>
        <th class="py-3 px-6 text-center">Actions</th>
      </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">
      <tr class="border-b border-gray-200 hover:bg-gray-50 transition duration-200 ease-in-out">
        <td class="py-3 px-6 text-left text-blue-600">
          <a href="#" class="hover:underline">135377</a>
        </td>
        <td class="py-3 px-6 text-left">BASIC</td>
        <td class="py-3 px-6 text-left">1:500</td>
        <td class="py-3 px-6 text-left text-green-500 font-semibold">23207</td>
        <td class="py-3 px-6 text-left text-green-500 font-semibold">23207</td>
        <td class="py-3 px-6 text-center">
          <div class="flex items-center justify-center space-x-2">
            <a href="/Site/Deposit?selectedAccontId=249" class="text-blue-500">
            <i class="ri-arrow-left-line"></i>
            </a>
           
            <a href="/Site/Deposit?selectedAccontId=249" class="text-blue-500">
            <i class="ri-loop-right-line"></i>
            </a>
            
            <a href="/Site/Deposit?selectedAccontId=249" class="text-blue-500">
            <i class="ri-arrow-right-line"></i>
            </a>
            <a href="/Site/Deposit?selectedAccontId=249" class="text-blue-500">
            <i class="ri-settings-3-line"></i>
            </a>
          </div>
        </td>
      </tr>
    </tbody>
    
  </table>
</div>

<div class="mt-4 text-gray-400 text-sm text-left">
  <p>Showing Page 1 of 1</p>
</div>

  </div>
  
</div>
<style>
  .fa-arrow-left::before {
  content: "\f060";
}
  </style>

<div class="container mx-auto p-4">

    <!-- Breadcrumb and Title -->
    <div class=" flex justify-between items-center">
        <h1 class="text-2xl font-semibold ">All Trade Report History </h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 " style="color: var(--text-breadcrumbs-color);">/</span>
            <span class="" style="color: var(--text-breadcrumbs-color);">All Trade Report History </span>
        </nav>
    </div>

    <!-- Search and Filter Section -->
    <div class="container mx-auto p-4">
        <div class="border border-gray-100 shadow-md rounded-md p-4" style="background-color: var( --card-bg-color); color: var(--text-color);">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Search Input -->
                <div>
                    <label class="block font-semibold text-sm  mb-1">Search</label>
                    <input type="text" placeholder="type to search" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" style="background-color: var( --card-bg-color);">
                </div>
                
                <!-- Date From Input -->
                <div>
                    <label class="block font-semibold text-sm  mb-1">From</label>
                    <div class="relative">
                        <input type="date" placeholder="dd / mm / yyyy" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" style="background-color: var( --card-bg-color);">
                        <span class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M6 2a1 1 0 00-1 1v1H3a2 2 0 00-2 2v11a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2h-2V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zM4 8h12v9H4V8z"/>
                            </svg>
                        </span>
                    </div>
                </div>

                <!-- Date To Input -->
                <div>
                    <label class="block font-semibold text-sm  mb-1">To</label>
                    <div class="relative">
                        <input type="date" placeholder="dd / mm / yyyy" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" style="background-color: var( --card-bg-color);">
                        <span class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M6 2a1 1 0 00-1 1v1H3a2 2 0 00-2 2v11a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2h-2V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zM4 8h12v9H4V8z"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>

              <!-- Table Section -->
    <div class="overflow-auto mt-4">
      <table class="min-w-full border text-xs" style="background-color: var( --card-bg-color); color: var(--text-color);">
        <thead class=" font-semibold uppercase " style="background-color: var(--bg-list); ">
          <tr style="color: var(--text-color);">
            <th class="p-2 border text-left">Close Time</th>
            <th class="p-2 border text-left">Account No.</th>
            <th class="p-2 border text-left">Plan Type</th>
            <th class="p-2 border text-left">Symbol</th>
            <th class="p-2 border text-left">Buy / Sell</th>
            <th class="p-2 border text-left">Volume</th>
            <th class="p-2 border text-left">My Rebate</th>
            <th class="p-2 border text-left">Rebate Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-2 border text-blue-500">25-10-2024 04:16:13 AM</td>
            <td class="p-2 border text-purple-600">748089</td>
            <td class="p-2 border">NZDUSD.s</td>
            <td class="p-2 border">0.6009</td>
            <td class="p-2 border">0.6007</td>
            <td class="p-2 border text-red-500">Sell</td>
            <td class="p-2 border">1.00</td>
            <td class="p-2 border text-red-500">-21.00</td>
          </tr>
          <tr>
            <td class="p-2 border text-blue-500">25-10-2024 04:24:05 AM</td>
            <td class="p-2 border text-purple-600">793026</td>
            <td class="p-2 border">NZDUSD.s</td>
            <td class="p-2 border">0.6007</td>
            <td class="p-2 border">0.6006</td>
            <td class="p-2 border text-red-500">Sell</td>
            <td class="p-2 border">1.00</td>
            <td class="p-2 border text-red-500">-15.00</td>
          </tr>
        </tbody>
      </table>
    </div>
        </div>
       
    </div>

   

</div>

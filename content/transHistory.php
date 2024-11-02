 <!-- Main content start here -->
 <div class="mb-5 container mx-auto p-5">

    <!-- content -->
    
    <div class="pb-3  flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-700">Transaction History</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 text-gray-800">/</span>
            <span class="text-gray-800">Transaction History</span>
        </nav>
    </div>

    <div class="  mb-6">
        <div class="flex space-x-4 text-gray-700 font-semibold border-b border-gray-300 ">
          <button class=" py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Deposit</button>
          <button class=" py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Withdrawal</button>
          <button class=" py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Auto Transfer</button>
          <button class="text-blue-700 py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Transaction History</button>
        </div>
      </div>
      <div class="bg-white shadow-lg p-6">
      <!-- Date Filter Section -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center mb-6">
        <!-- From Date -->
        <div>
          <label for="fromDate" class="block font-medium mb-2">From</label>
          <input type="date" id="fromDate" class="w-full border rounded px-4 py-2">
        </div>

        <!-- To Date -->
        <div>
          <label for="toDate" class="block font-medium mb-2">To</label>
          <input type="date" id="toDate" class="w-full border rounded px-4 py-2">
        </div>

        <!-- Filter Button -->
        <div class="flex items-end mt-5">
          <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 w-full md:w-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-1" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-3-8a1 1 0 011-1h4a1 1 0 010 2H8a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
            Filter
          </button>
        </div>
      </div>

      <!-- Transaction Table -->
      <div class="overflow-auto">
        <table class="min-w-full bg-gray-100 border rounded-lg shadow-md">
          <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
              <th class="py-3 px-6 text-left">Reference</th>
              <th class="py-3 px-6 text-left">Type</th>
              <th class="py-3 px-6 text-left">Account No</th>
              <th class="py-3 px-6 text-left">Plan Name</th>
              <th class="py-3 px-6 text-left">Amount</th>
              <th class="py-3 px-6 text-left">Requested On</th>
              <th class="py-3 px-6 text-left">Completed On</th>
              <th class="py-3 px-6 text-left">Remarks</th>
              <th class="py-3 px-6 text-left">Status</th>
            </tr>
          </thead>
          <tbody class="text-gray-700 text-sm font-light">
            <!-- Sample Row -->
            <tr class="border-b border-gray-200 hover:bg-gray-100">
              <td class="py-3 px-6 text-left whitespace-nowrap">REF12345</td>
              <td class="py-3 px-6 text-left">Withdrawal</td>
              <td class="py-3 px-6 text-left">135377</td>
              <td class="py-3 px-6 text-left">Premium</td>
              <td class="py-3 px-6 text-left">$500</td>
              <td class="py-3 px-6 text-left">01/10/2023</td>
              <td class="py-3 px-6 text-left">05/10/2023</td>
              <td class="py-3 px-6 text-left">-</td>
              <td class="py-3 px-6 text-left text-green-500">Completed</td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>

    
    </div>
    
    <!-- content end -->
  </div>
  <!-- Main content end -->
<div class="mb-5 container mx-auto p-5">
     
     
<div class="pb-3  flex justify-between items-center">
        <h1 class="text-2xl font-semibold ">Trading Contest</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 " style="color: var(--text-breadcrumbs-color);">/</span>
            <span class="" style="color: var(--text-breadcrumbs-color);">Trading Contest</span>
        </nav>
    </div>

    <!-- Tabs -->
    <div class=" shadow-lg p-6 border border-gray-100 " style="background-color: var( --card-bg-color); color: var(--text-color);">
    <div class="flex border-b mb-4">
      <button id="closed-trades-tab" class="py-2 px-4  border-b-2 border-transparent hover:text-blue-500 focus:outline-none">
        Closed Trades
      </button>
      <button id="open-trades-tab" class="py-2 px-4 text-blue-500 border-b-2 border-blue-500 focus:outline-none">
        Open Trades
      </button>
    </div>

    <!-- Search Bar -->
    <div class="mb-4">
      <label for="account" class="sr-only">Select account</label>
      <select id="account" class="w-full p-2 border bg-gray-50 rounded"  style="background-color: var( --card-bg-color); ">
        <option value="">--Select account--</option>
      </select>
    </div>

    <!-- Table -->
    <div class="overflow-auto">
      <table class="min-w-full border" style="background-color: var( --card-bg-color); color: var(--text-color);">
        <thead class=" text-sm" style="background-color: var(--bg-list); ">
          <tr style="color: var(--text-color);">
            <th class="p-2 border text-left">Open Time</th>
            <th class="p-2 border text-left">Account No.</th>
            <th class="p-2 border text-left">Symbol</th>
            <th class="p-2 border text-left">Open Price</th>
            <th class="p-2 border text-left">Buy / Sell</th>
            <th class="p-2 border text-left">Volume</th>
            <th class="p-2 border text-left">Profit / Loss</th>
          </tr>
        </thead>
        <tbody>
          <!-- Placeholder for data, add rows here dynamically if needed -->
        </tbody>
      </table>
    </div>
</div>

     <!-- footer start here -->
     <!-- <footer class="bg-[#f8f4f3] text-white p-4 fixed bottom-0 left-0 right-0">
        <div class="container mx-auto text-center text-gray-800">
          © 2024 Your Company Name. All rights reserved.
        </div>
      </footer> -->
      <!-- footer end -->
  </div>
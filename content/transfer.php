<div class="mb-5 container mx-auto p-5">
       
    <!-- content start -->
    
    <div class="pb-3  flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-700">Internal Transfer</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 text-gray-800">/</span>
            <span class="text-gray-800">Internal Transfer</span>
        </nav>
    </div>

    <div class="  mb-6">
        <div class="flex space-x-4 text-gray-700 font-semibold border-b border-gray-300 ">
          <button class=" py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Deposit</button>
          <button class=" py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Withdrawal</button>
          <button class="text-blue-700 py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Auto Transfer</button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Transaction History</button>
        </div>
      </div>

      <div class="bg-white shadow-lg p-6">
      <!-- Form Heading -->
      <p class="font-medium pb-2">Fill in the details</p>
      <hr class="py-2">
      <p class="text-sm text-gray-600 mb-6">
        Internal transfers between trading accounts of the same account currency are allowed instantly via request using the form below.
        Should you wish to transfer funds between trading accounts of different account currencies, you can request it by sending an email to 
        <a href="mailto:support@capitalprimefx.com" class="text-blue-500">support@capitalprimefx.com</a>.
      </p>

      <!-- Transfer Form -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
        
        <!-- From Account -->
        <div>
          <label for="fromAccount" class="block font-medium text-sm mb-2">From Account</label>
          <select id="fromAccount" class="w-full border rounded px-4 py-2">
            <option>--Select account--</option>
            <option value="135377">135377</option>
            <!-- Add more options as needed -->
          </select>
        </div>

        <!-- To Account -->
        <div>
          <label for="toAccount" class="block font-medium text-sm mb-2">To Account</label>
          <select id="toAccount" class="w-full border rounded px-4 py-2">
            <option>--Select account--</option>
            <option value="246810">246810</option>
            <!-- Add more options as needed -->
          </select>
        </div>

        <!-- Current Balance -->
        <div>
          <label for="balance" class="block font-medium mb-2">Current Available Balance ($)</label>
          <input type="text" id="balance" class="w-full border rounded px-4 py-2 bg-gray-100" placeholder="Balance" disabled>
        </div>

        <!-- Amount to Transfer -->
        <div>
          <label for="amount" class="block font-medium mb-2">Amount Wish To Transfer</label>
          <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount">
        </div>
      </div>

      <!-- Transfer Button -->
      <div class="text-left">
        <button class="bg-blue-500 text-white font-semibold px-6 py-2 rounded hover:bg-blue-600 cursor-not-allowed">Transfer Now</button>
      </div>
      
    </div>
      <!-- footer end -->
  </div>
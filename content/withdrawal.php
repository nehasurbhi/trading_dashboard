<!-- Main content start from here -->
<div class="mb-5 container mx-auto p-5">
    <!-- content -->
    <div class="pb-3  flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-700">Withdrawal</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 text-gray-800">/</span>
            <span class="text-gray-800">Withdrawal</span>
        </nav>
    </div>

    <div class="  mb-6">
        <div class="flex space-x-4 text-gray-700 font-semibold border-b border-gray-300 ">
          <button class=" py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Deposit</button>
          <button class="text-blue-700 py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Withdrawal</button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Auto Transfer</button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Transaction History</button>
        </div>
      </div>
      <!-- Select Account -->
    <div class="bg-white my-6 p-6">
    <label class="block font-medium pb-3">Select Account</label>
    <hr class="py-3">
        <label class="block text-sm mb-1 font-semibold" for="account">Select Account</label>
        <select id="account" class="w-full border bg-white rounded px-4 py-2">
          <option>--Select account--</option>
          <option value="135377">135377</option>
          <!-- Add other options here if needed -->
        </select>
    </div>
       
    <div class="bg-white shadow-lg p-6 my-5">
      <!-- Select Payment Method -->
      <div class="mb-6">
      <label class="block font-medium pb-3">Select Payment Method</label>
      <hr class="py-3">
        <p class="block text-sm mb-1 font-semibold">Please select a payment method</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          <button class="payment-method bg-yellow-100 hover:bg-yellow-200 px-4 py-2 rounded-lg flex d-flex items-center">
            <img src="img/icons/Indian_Rupee.png" alt="Indian rupees" height="45px" width="45px">
            <span class="px-4">Indian Cash</span>
          </button>
          <button class="payment-method bg-blue-100 hover:bg-blue-200 px-4 py-2 rounded-lg flex d-flex items-center">
          <img src="img/icons/Bank_building.png" alt="Bank_building" height="45px" width="45px">
            <span class="px-4">India Local Banks</span>
          </button>
          <button class="payment-method bg-yellow-100 hover:bg-yellow-200 px-4 py-2 rounded-lg flex d-flex items-center">
          <img src="img/icons/Bitcoin.png" alt="Bitcoin" height="50px" width="50px">
            <span class="px-4">Bitcoin</span>
          </button>
          <button class="payment-method bg-green-100 hover:bg-green-200 px-4 py-2 rounded-lg flex d-flex items-center">
          <img src="img/icons/Tether.png" alt="Tether" height="40px" width="40px">
            <span class="px-4">Tether(TRC20)</span>
          </button>
          <button class="payment-method bg-purple-100 hover:bg-purple-200 px-4 py-2 rounded-lg flex d-flex items-center">
          <img src="img/icons/ethereum.png" alt="ethereum">
            <span class="px-4">Ethereum</span>
          </button>
          <button class="payment-method bg-green-100 hover:bg-green-200 px-4 py-2 rounded-lg flex d-flex items-center">
          <img src="img/icons/Bank.png" alt="Bank" height="40px" width="40px">
            <span class="px-4">India Net Banking</span>
          </button>
          <button class="payment-method bg-green-100 hover:bg-green-200 px-4 py-2 rounded-lg flex d-flex items-center">
          <img src="img/icons/Tether.png" alt="Tether" height="40px" width="40px">
            <span class="px-4">TRON(TRX)</span>
          </button>
        </div>
        <div id="selectedMethod" class="text-blue-500 mt-2"></div>
      </div>

     
    </div>
    <!-- content end -->
    
  </div>
  <!-- Main content end -->
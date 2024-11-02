  <!-- Main container start from here -->
  <div class="mb-5 container mx-auto p-5">
    <!-- content start -->
     <div class="pb-3  flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-700">Deposit</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 text-gray-800">/</span>
            <span class="text-gray-800">Deposit</span>
        </nav>
    </div>

      <div class="  mb-6">
        <div class="flex space-x-4 text-gray-700 font-semibold border-b border-gray-300 ">
          <button class="text-blue-700 py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Deposit</button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Withdrawal</button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Auto Transfer</button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">Transaction History</button>
        </div>
      </div>

      <div class="mb-6 bg-white p-5">
      <label class="block font-medium pb-3">Select Account</label>
      <hr class="py-3">
        <label class="block text-sm mb-1 font-semibold" for="account">Select Account</label>
        <input type="text" id="account" class="w-full border rounded px-4 py-2" placeholder="Select account" value="135377" readonly>
      </div>

      <div class="mb-6 bg-white p-5">
        
        <label class="block font-medium pb-3">Select Payment Method</label>
        <hr class="py-3">
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
        <div class="my-6 text-sm">
        <p class="ml-2">Selected payment method:<span class="text-blue-600"> Please select a payment method</span></p>
        <label class="inline-flex items-center">
        
          <input type="checkbox" id="agree" class="form-checkbox">
          <span class="ml-2">I agree to <a href="#" class="text-blue-600 hover:text-blue-800">Terms & Conditions</a></span>
        </label>
      </div>

      <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block font-medium mb-2" for="amount">Enter Amount in $</label>
          <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount">
        </div>
      
        <div>
          <label class="block font-medium mb-2" for="proof">Upload proof of payment</label>
          <input type="file" id="proof" class="w-full border rounded px-4 py-2">
        </div>
      </div>

      <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded ">
        Submit Request
      </button>
      </div>

     
      
     
    </div>
    <!-- content end -->
     
  </div>
   <!-- Main container end -->
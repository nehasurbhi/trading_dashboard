<!-- Main content start from here -->
<div class="mb-5 container mx-auto p-5">
    <!-- content -->
    <div class="pb-3  flex justify-between items-center">
        <h1 class="text-2xl font-semibold ">Withdrawal</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 "  style="color: var(--text-breadcrumbs-color);">/</span>
            <span class=""  style="color: var(--text-breadcrumbs-color);">Withdrawal</span>
        </nav>
    </div>

    <div class="  mb-6">
        <div class="flex space-x-4  font-semibold border-b border-gray-300 ">
          <button class=" py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none"><a href="index.php?page=deposit">Deposit</a></button>
          <button class="text-blue-700 py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none"><a href="index.php?page=withdrawal">Withdrawal</a></button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none"><a href="index.php?page=transfer">Auto Transfer</a></button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none"><a href="index.php?page=transHistory"></a>Transaction History</button>
        </div>
      </div>
      <!-- Select Account -->
    <div class="my-6 p-6 rounded-sm border border-gray-100" style="background-color: var( --card-bg-color); color: var(--text-color); ">
    <label class="block font-medium pb-3">Select Account</label>
    <hr class="py-3">
        <label class="block text-sm mb-1 font-semibold" for="account">Select Account</label>
        <select id="account" class="w-full border bg-white rounded px-4 py-2" style="background-color: var( --card-bg-color);">
          <option>--Select account--</option>
          <option value="135377">135377</option>
          <!-- Add other options here if needed -->
        </select>
    </div>
       
    <div class=" p-5 rounded-sm border border-gray-100" style="background-color: var( --card-bg-color); color: var(--text-color); ">
        <label class="block font-medium pb-3">Select Payment Method</label>
        <hr class="py-3">
          <p>Please Select a payment method</p>
         <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-gray-600" id="payment-methods" style="">
          <button onclick="showContent('indian-cash', this)" class="payment-method bg-yellow-100 hover:bg-yellow-200 px-4 py-2 rounded-lg flex items-center">
            <img src="img/icons/Indian_Rupee.png" alt="Indian rupees" height="45px" width="45px">
            <span class="px-4">Indian Cash</span>
          </button>
          <button onclick="showContent('india-local-banks', this)" class="payment-method bg-blue-100 hover:bg-blue-200 px-4 py-2 rounded-lg flex items-center">
            <img src="img/icons/Bank_building.png" alt="Bank building" height="45px" width="45px">
            <span class="px-4">India Local Banks</span>
          </button>
          <button onclick="showContent('bitcoin', this)" class="payment-method bg-yellow-100 hover:bg-yellow-200 px-4 py-2 rounded-lg flex items-center">
            <img src="img/icons/Bitcoin.png" alt="Bitcoin" height="50px" width="50px">
            <span class="px-4">Bitcoin</span>
          </button>
          <button onclick="showContent('tether-trc20', this)" class="payment-method bg-green-100 hover:bg-green-200 px-4 py-2 rounded-lg flex items-center">
            <img src="img/icons/Tether.png" alt="Tether" height="40px" width="40px">
            <span class="px-4">Tether (TRC20)</span>
          </button>
          <button onclick="showContent('ethereum', this)" class="payment-method bg-purple-100 hover:bg-purple-200 px-4 py-2 rounded-lg flex items-center">
            <img src="img/icons/ethereum.png" alt="Ethereum">
            <span class="px-4">Ethereum</span>
          </button>
          <button onclick="showContent('net-banking', this)" class="payment-method bg-green-100 hover:bg-green-200 px-4 py-2 rounded-lg flex items-center">
            <img src="img/icons/Bank.png" alt="Bank" height="40px" width="40px">
            <span class="px-4">India Net Banking</span>
          </button>
          <button onclick="showContent('tRON', this)" class="payment-method bg-green-100 hover:bg-green-200 px-4 py-2 rounded-lg flex items-center">
            <img src="img/icons/Tether.png" alt="Tether" height="40px" width="40px">
            <span class="px-4">TRON (TRX)</span>
          </button>
        </div>

    <!-- Dynamic Content Sections (Hidden by Default) -->

    <!-- Indian Cash Section -->
    <div id="indian-cash" class="content-section hidden mb-4 " style="background-color: var( --card-bg-color); color: var(--text-color); " >
          <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
            <div>
              <label class="block font-medium mb-2" for="amount">Enter Amount in $</label>
              <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
              <div class="flex flex-col md:flex-row items-center justify-between font-semibold mb-4">
        <span>Available Balance: <span id="balance">$23207</span></span>
        <span>Amount in INR: <span id="inrAmount" class="text-blue-500">NaN</span></span>
      </div>
            </div>
          
            <div>
              <!-- <label class="block font-medium mb-2" for="proof">Upload proof of payment</label>
              <input type="file" id="proof" class="w-full border rounded px-4 py-2"> -->
            </div>
          </div>

          <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded ">
            Confirm & Submit
          </button>
          </div>
          <!-- India Local Banks Section -->
        <div id="india-local-banks" class="content-section hidden rounded-b-lg p-4 mb-3 shadow-xs " style="background-color: var( --card-bg-color); color: var(--text-color); ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Bank Name -->
            <div>
              <label for="bankName" class="block text-lg font-semibold mb-2">Enter name of the Bank</label>
              <input
                type="text"
                id="bankName"
                placeholder="Enter name of the Bank"
                class="w-full border border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:border-blue-500" style="background-color: var( --card-bg-color);"
              />
            </div>
            <!-- Account Holder Name -->
            <div>
              <label for="accountHolder" class="block text-lg font-semibold mb-2">Enter Name of Account Holder</label>
              <input
                type="text"
                id="accountHolder"
                placeholder="Enter name of account-holder"
                class="w-full border border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:border-blue-500" style="background-color: var( --card-bg-color);"
              />
            </div>
            <!-- Account Number -->
            <div>
              <label for="accountNumber" class="block text-lg font-semibold mb-2">Enter your Account Number</label>
              <input
                type="text"
                id="accountNumber"
                placeholder="Enter your Account Number"
                class="w-full border border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:border-blue-500" style="background-color: var( --card-bg-color);"
              />
            </div>
            <!-- IFSC Code -->
            <div>
              <label for="ifscCode" class="block text-lg font-semibold mb-2">Enter IFSC Code</label>
              <input
                type="text"
                id="ifscCode"
                placeholder="Enter IFSC CodeDetails"
                class="w-full border border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:border-blue-500"
                style="background-color: var( --card-bg-color);"/>
            </div>
          </div>

          <!-- Amount Section -->
          <div class="mt-4">
            <label for="amount" class="block text-lg font-semibold mb-2">Enter Amount</label>
            <input
              type="text"
              id="amount"
              placeholder="Enter Amount"
              class="w-full md:w-1/2 border border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:border-blue-500"
              oninput="convertToINR()"  style="background-color: var( --card-bg-color);"
            />
            <!-- Balance and Converted Amount Section -->
          <div class="flex flex-col w-full md:w-1/2 md:flex-row items-center justify-between  font-semibold mb-4">
            <span>Available Balance: <span id="balance">$23207</span></span>
            <span>Amount in INR: <span id="inrAmount" class="text-blue-500">NaN</span></span>
          </div>
          </div>

          <!-- Submit Button -->
          <button
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-full md:w-auto"
            onclick="confirmSubmit()"
          >
            Confirm & Submit
          </button>
        </div>

        <!-- Bitcoin Section -->
    <div id="bitcoin" class="content-section hidden rounded-b-lg  pb-4 mb-4 shadow-xs" style="background-color: var( --card-bg-color); color: var(--text-color); ">
      <div class="mb-1 grid grid-cols-1 md:grid-cols-2 gap-4 pt-2 mt-2">
          <div>
            <label class="block font-medium mb-1" for="amount">Enter your BTC Wallet Address</label>
            <input type="text" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
          </div>
        
          <div>
            <label class="block font-medium mb-1" for="proof">Enter Amount </label>
            <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color); ">
            <div class="flex flex-col md:flex-row items-center justify-between font-semibold mb-4">
      <span>Available Balance: <span id="balance">$23207</span></span>
      <span>Amount in INR: <span id="inrAmount" class="text-blue-500">NaN</span></span>
    </div>
          </div>
        </div>

        <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded ">
          Confirm & Submit
        </button>
        </div>


          <!-- Tether (TRC20) Section -->
    <div id="tether-trc20" class="content-section hidden mb-5 py-4" style="background-color: var( --card-bg-color); color: var(--text-color); ">
    <div class="mb-1 grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
        <div>
          <label class="block font-medium mb-1" for="amount">Enter your Tether Wallet Address</label>
          <input type="text" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
        </div>
      
        <div>
          <label class="block font-medium mb-1" for="proof">Enter Amount </label>
          <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);  ">
          <div class="flex flex-col md:flex-row items-center justify-betweenfont-semibold mb-4">
    <span>Available Balance: <span id="balance">$23207</span></span>
    <span>Amount in INR: <span id="inrAmount" class="text-blue-500">NaN</span></span>
  </div>
        </div>
      </div>

      <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded ">
        Confirm & Submit
      </button>
    </div>

    <!-- Ethereum Section -->
    <div id="ethereum" class="content-section hidden rounded-b-lg py-4 mb-4 shadow-sm " style="background-color: var( --card-bg-color); color: var(--text-color); ">
       <div class="mb-1 grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
        <div>
          <label class="block font-medium mb-1" for="amount">Enter your ETH Wallet Address</label>
          <input type="text" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
        </div>
      
        <div>
          <label class="block font-medium mb-1" for="proof">Enter Amount </label>
          <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
          <div class="flex flex-col md:flex-row items-center justify-between font-semibold mb-4">
    <span>Available Balance: <span id="balance">$23207</span></span>
    <span>Amount in INR: <span id="inrAmount" class="text-blue-500">NaN</span></span>
  </div>
        </div>
      </div>

      <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded ">
        Confirm & Submit
      </button>
    </div>

     <!-- Net Banking Section -->
     <div id="net-banking" class="content-section hidden rounded-b-lg py-4 mb-4 shadow-sm " style="background-color: var( --card-bg-color); color: var(--text-color); ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Bank Name -->
        <div>
          <label for="bankName" class="block text-lg font-semibold mb-2">Enter name of the Bank</label>
          <input
            type="text"
            id="bankName"
            placeholder="Enter name of the Bank"
            class="w-full border border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:border-blue-500" style="background-color: var( --card-bg-color); "
          />
        </div>
        <!-- Account Holder Name -->
        <div>
          <label for="accountHolder" class="block text-lg font-semibold mb-2">Enter Name of Account Holder</label>
          <input
            type="text"
            id="accountHolder"
            placeholder="Enter name of account-holder"
            class="w-full border border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:border-blue-500" style="background-color: var( --card-bg-color);"
          />
        </div>
        <!-- Account Number -->
        <div>
          <label for="accountNumber" class="block text-lg font-semibold mb-2">Enter your Account Number</label>
          <input
            type="text"
            id="accountNumber"
            placeholder="Enter your Account Number"
            class="w-full border border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:border-blue-500" style="background-color: var( --card-bg-color);"
          />
        </div>
        <!-- IFSC Code -->
        <div>
          <label for="ifscCode" class="block text-lg font-semibold mb-2">Enter IFSC Code</label>
          <input
            type="text"
            id="ifscCode"
            placeholder="Enter IFSC CodeDetails"
            class="w-full border border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:border-blue-500" style="background-color: var( --card-bg-color);"
          />
        </div>
      </div>

      <!-- Amount Section -->
      <div class="mt-4">
        <label for="amount" class="block text-lg font-semibold mb-2">Enter Amount</label>
        <input
          type="text"
          id="amount"
          placeholder="Enter Amount"
          class="w-full md:w-1/2 border border-gray-300 rounded px-4 py-2 text-gray-700 focus:outline-none focus:border-blue-500"
          oninput="convertToINR()" style="background-color: var( --card-bg-color);"
        />
        <!-- Balance and Converted Amount Section -->
      <div class="flex flex-col w-full md:w-1/2 md:flex-row items-center justify-between font-semibold mb-4">
        <span>Available Balance: <span id="balance">$23207</span></span>
        <span>Amount in INR: <span id="inrAmount" class="text-blue-500">NaN</span></span>
      </div>
      </div>

    

  <!-- Submit Button -->
      <button
        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded w-full md:w-auto"
        onclick="confirmSubmit()"
      >
        Confirm & Submit
      </button>
    </div>

     <!-- TRON Section -->
     <div id="tRON" class="content-section hidden  rounded-b-lg py-4 mb-4 shadow-sm" style="background-color: var( --card-bg-color); color: var(--text-color); ">
    <div class="mb-1 grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
        <div>
          <label class="block font-medium mb-1" for="amount">Enter your Tether Wallet Address</label>
          <input type="text" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
        </div>
      
        <div>
          <label class="block font-medium mb-1" for="proof">Enter Amount </label>
          <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
          <div class="flex flex-col md:flex-row items-center justify-betweenfont-semibold mb-4">
    <span>Available Balance: <span id="balance">$23207</span></span>
    <span>Amount in INR: <span id="inrAmount" class="text-blue-500">NaN</span></span>
  </div>
        </div>
      </div>

      <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded ">
        Confirm & Submit
      </button>
    </div>
    </div>
    </div>

   
   
    
  </div>
    <!-- content end -->
    
  </div>
  <!-- Main content end -->
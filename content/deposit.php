<!-- Main container start from here -->
<div class="mb-5 container mx-auto p-5">
  <!-- content start -->
  <div class="pb-3 flex justify-between items-center">
    <h1 class="text-2xl font-semibold " style="color: var(--text-color);">Deposit</h1>
    <nav class="text-blue-400 text-sm">
      <a href="#" class="hover:text-blue-500">Home</a>
      <span class="mx-1 " style="color: var(--text-breadcrumbs-color);">/</span>
      <span class="" style="color: var(--text-breadcrumbs-color);">Deposit</span>
    </nav>
  </div>

      <div class="mb-6">
        <div class="flex space-x-4 text-gray-700 font-semibold border-b border-gray-300" style="color: var(--text-color);">
          <button class="text-blue-700 py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">
            <a href="index.php?page=deposit">Deposit</a>
          </button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">
            <a href="index.php?page=withdrawal">Withdrawal</a>
          </button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">
            <a href="index.php?page=transfer">Auto Transfer</a>
          </button>
          <button class="py-2 px-4 border-b-2 border-transparent hover:border-blue-700 focus:border-gray-700 focus:outline-none">
            <a href="index.php?page=transHistory">Transaction History</a>
          </button>
        </div>
      </div>

      <div class="mb-6 p-5 rounded-sm border border-gray-100" style="background-color: var( --card-bg-color); color: var(--text-color); ">
        <label class="block font-medium pb-3">Select Account</label>
        <hr class="py-3">
        <label class="block text-sm mb-1 font-semibold" for="account">Select Account</label>
        <input type="text" id="account" class="w-full border rounded px-4 py-2" placeholder="Select account" value="135377" readonly style="background-color: var( --card-bg-color); color: var(--text-color); ">
      </div>

  <div class=" p-5 rounded-sm border border-gray-100" style="background-color: var( --card-bg-color); color: var(--text-color); ">
        <label class="block font-medium pb-3">Select Payment Method</label>
        <hr class="py-3">

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

        <div class="content-section">
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
              <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
            </div>
            <div>
              <label class="block font-medium mb-2" for="proof">Upload proof of payment</label>
              <input type="file" id="proof" class="w-full border rounded px-4 py-2">
            </div>
          </div>
          <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mb-5">
            Submit Request
          </button>
        </div>

    <!-- Dynamic Content Sections (Hidden by Default) -->

    <!-- Indian Cash Section -->
    <div id="indian-cash" class="content-section hidden mb-4 " style="background-color: var( --card-bg-color); color: var(--text-color);">
        <div class="my-6 text-sm">
          <p class="ml-2">Selected payment method:<span class="text-blue-600"> Indian Cash</span></p>
          <label class="inline-flex items-center">
          
            <input type="checkbox" id="agree" class="form-checkbox">
            <span class="ml-2">I agree to <a href="#" class="text-blue-600 hover:text-blue-800">Terms & Conditions</a></span>
          </label>
        </div>
      <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block font-medium mb-2" for="amount">Enter Amount in $</label>
          <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
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
       <!-- India Local Banks Section -->
    <div id="india-local-banks" class="content-section hidden my-3 shadow-xs rounded-sm " style="background-color: var( --card-bg-color); color: var(--text-color);">
      <div class="mb-3 text-sm">
        <p class="ml-2">Selected payment method:<span class="text-blue-600"> India Local Banks</span></p>
        <label class="inline-flex items-center">
        
          <input type="checkbox" id="agree" class="form-checkbox">
          <span class="ml-2">I agree to <a href="#" class="text-blue-600 hover:text-blue-800">Terms & Conditions</a></span>
        </label>
      </div>
      <div class="p-2 ">
        <p class=" text-lg font-semibold mb-2">Please make your payment to one of the following India Local Banks Accounts</p>
        
          <div class="bg-blue-500 text-white rounded-t-lg px-4 py-2 text-lg font-semibold">
            Account 1
          </div>
        
          <div class="border border-gray-100 rounded-b-lg p-4  shadow-md" style="background-color: var(--bg-color); color: var(--text-color);">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <p class="flex items-center ">
                <span class="font-semibold mr-2">Bank Name:</span> 
                State Bank of India
              </p>
              <p class="flex items-center ">
                <span class="font-semibold mr-2">Receiver's Name:</span>
                Sanny Kumar Singhal
              </p>
              <p class="flex items-center ">
                <span class="font-semibold mr-2">Account Number:</span>
                90312323456545
                <button onclick="copyToClipboard('90312323456545')" class="ml-2 text-blue-600">
                <i class="ri-file-copy-2-line"></i>
                </button>
              </p>
              <p class="flex items-center ">
                <span class="font-semibold mr-2">IFSC Code:</span>
                sbin0007867
              </p>
              <p class="flex items-center ">
                <span class="font-semibold mr-2">UPI Link:</span>
                <a href="upi://pay?pa=898765654323@tfdr&pn=Sanny Kumar Singhal" class="text-blue-500 hover:underline">
                  898765654323@tfdr
                </a>
              </p>
              <p class="flex items-center ">
                <span class="font-semibold mr-2">QR Code:</span>
                <a href="#" class="text-blue-500 hover:underline">Click here</a>
              </p>
            </div>
          </div>
      </div>
         <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block font-medium mb-2" for="amount">Enter Amount in $</label>
              <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style=" background-color: var( --card-bg-color);">
            </div>
          
            <div>
              <label class="block font-medium mb-2" for="proof">Upload proof of payment</label>
              <input type="file" id="proof" class="w-full border rounded px-4 py-2">
            </div>
          </div>

          <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 my-6 rounded ">
            Submit Request
          </button>
    </div>

     <!-- Bitcoin Section -->
     <div id="bitcoin" class="content-section hidden rounded-b-lg  my-3 shadow-xs" style="background-color: var( --card-bg-color); color: var(--text-color);">
      <div class="my-3 text-sm">
        <p class="ml-2">Selected payment method:<span class="text-blue-600">Bitcoin</span></p>
        <label class="inline-flex items-center">
        
          <input type="checkbox" id="agree" class="form-checkbox">
          <span class="ml-2">I agree to <a href="#" class="text-blue-600 hover:text-blue-800">Terms & Conditions</a></span>
        </label>
      </div>
      <div class="p-2 ">
      <p class=" text-lg font-semibold mb-2">Please make your payment to one of the following India Local Banks Accounts</p>
      
        <div class="bg-blue-500 text-white rounded-t-lg px-4 py-2 text-lg font-semibold">
          Account 1
        </div>
      
        <div class="border border-gray-200 rounded-b-lg p-5 bg-white shadow-md" style="background-color: var(--bg-color); color: var(--text-color);">

              <div class=" items-center text-center ">
                <div class="font-semibold mr-2">BTC Wallet Address :-</div>
                <span>33h9B48abba6w27skDMgEo39WKvPEfPu1E</span>
                <button onclick="copyToClipboard('33h9B48abba6w27skDMgEo39WKvPEfPu1E')" class="ml-2 text-blue-600">
                <i class="ri-file-copy-2-line"></i>
                </button>
        </div>
      </div>

        <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4 mt-3">
          <div>
            <label class="block font-medium mb-2" for="amount">Enter Amount in $</label>
            <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
          </div>
        
          <div>
            <label class="block font-medium mb-2" for="proof">Upload proof of payment</label>
            <input type="file" id="proof" class="w-full border rounded px-4 py-2">
          </div>
        </div>

        <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mb-5">
          Submit Request
        </button>
      </div>
    </div>

     <!-- Tether (TRC20) Section -->
     <div id="tether-trc20" class="content-section hidden mb-5 " style="background-color: var( --card-bg-color); color: var(--text-color);">
            <div class="my-3 text-sm">
              <p class="ml-2">Selected payment method:<span class="text-blue-600">Tether(TRC20)</span></p>
              <label class="inline-flex items-center">
              
                <input type="checkbox" id="agree" class="form-checkbox">
                <span class="ml-2">I agree to <a href="#" class="text-blue-600 hover:text-blue-800">Terms & Conditions</a></span>
              </label>
            </div>
            <p class="text-lg font-semibold mb-2">Please make your payment to one of the following Tether(TRC20) Accounts</p>
          <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block font-medium mb-2" for="amount">Enter Amount in $</label>
              <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
            </div>
          
            <div>
              <label class="block font-medium mb-2" for="proof">Upload proof of payment</label>
              <input type="file" id="proof" class="w-full border rounded px-4 py-2">
            </div>
          </div>

          <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 mb-3 px-4 rounded ">
            Submit Request
          </button>
    </div>

      <!-- Ethereum Section -->
      <div id="ethereum" class="content-section hidden rounded-b-lg my-3 shadow-sm"  style="background-color: var( --card-bg-color); color: var(--text-color);">
        <div class="mb-3 text-sm">
            <p class="ml-2">Selected payment method:<span class="text-blue-600">Ethereum</span></p>
            <label class="inline-flex items-center">
            
              <input type="checkbox" id="agree" class="form-checkbox">
              <span class="ml-2">I agree to <a href="#" class="text-blue-600 hover:text-blue-800">Terms & Conditions</a></span>
            </label>
          </div>
          <p class=" text-lg font-semibold mb-2">Please make your payment to one of the following Ethereum Accounts</p>
        <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block font-medium mb-2" for="amount">Enter Amount in $</label>
            <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
          </div>
        
          <div>
            <label class="block font-medium mb-2" for="proof">Upload proof of payment</label>
            <input type="file" id="proof" class="w-full border rounded px-4 py-2">
          </div>
      </div>

        <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 mb-3 px-4 rounded ">
          Submit Request
        </button>
    </div>


      <!-- Net Banking Section -->
      <div id="net-banking" class="content-section hidden rounded-b-lg my-3 shadow-sm " style="background-color: var( --card-bg-color); color: var(--text-color);">
        <div class="mb-3 text-sm">
            <p class="ml-2">Selected payment method:<span class="text-blue-600"> India Net Banking</span></p>
            <label class="inline-flex items-center">
            
              <input type="checkbox" id="agree" class="form-checkbox">
              <span class="ml-2">I agree to <a href="#" class="text-blue-600 hover:text-blue-800">Terms & Conditions</a></span>
            </label>
          </div>
          <p class=" text-lg font-semibold mb-2">Please make your payment to one of the following  India Net Banking Accounts</p>
        <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block font-medium mb-2" for="amount">Enter Amount in $</label>
            <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
          </div>
        
          <div>
            <label class="block font-medium mb-2" for="proof">Upload proof of payment</label>
            <input type="file" id="proof" class="w-full border rounded px-4 py-2">
          </div>
        </div>

        <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 mb-3 px-4 rounded ">
          Submit Request
        </button>
    </div>
    <!-- TRON Section -->
    <div id="tRON" class="content-section hidden  rounded-b-lg my-3 shadow-sm " style="background-color: var( --card-bg-color); color: var(--text-color);">
        <div class="mb-3 text-sm">
          <p class="ml-2">Selected payment method:<span class="text-blue-600"> TRON(TRX)</span></p>
          <label class="inline-flex items-center">
          
            <input type="checkbox" id="agree" class="form-checkbox">
            <span class="ml-2">I agree to <a href="#" class="text-blue-600 hover:text-blue-800">Terms & Conditions</a></span>
          </label>
        </div>
        <p class=" text-lg font-semibold mb-2">Please make your payment to one of the following TRON(TRX) Accounts</p>
      <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block font-medium mb-2" for="amount">Enter Amount in $</label>
          <input type="number" id="amount" class="w-full border rounded px-4 py-2" placeholder="Enter amount" style="background-color: var( --card-bg-color);">
        </div>
      
        <div>
          <label class="block font-medium mb-2" for="proof">Upload proof of payment</label>
          <input type="file" id="proof" class="w-full border rounded px-4 py-2">
        </div>
      </div>

      <button id="submitRequest" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 mb-5 px-4 rounded ">
        Submit Request
      </button>
    
    </div>
    </div>
   
 
  </div>
</div>
   
<!-- Main container end -->

<style>
  .hidden {
    display: none;
  }
</style>

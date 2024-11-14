<!-- main content start -->
<div class="mb-5 container mx-auto p-5">
      
    <!-- content start -->
    
    <div class="pb-3  flex justify-between items-center">
        <h1 class="text-2xl font-semibold ">Open New Account</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 " style="color: var(--text-breadcrumbs-color);">/</span>
            <span class="" style="color: var(--text-breadcrumbs-color);">Open New Account</span>
        </nav>
    </div>
    <div class=" shadow-lg p-6 border border-gray-100" style="background-color: var( --card-bg-color); color: var(--text-color); ">
          <form id="accountForm" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label for="leverage" class="block  text-sm mb-1 font-medium">Leverage</label>
                <select id="leverage" class="w-full bg-gray-50 p-2 border border-gray-300 rounded-md" required style="background-color: var( --card-bg-color);">
                  <option value="">--Select Leverage--</option>
                  <option value="1:10">1:10</option>
                  <option value="1:20">1:20</option>
                  <option value="1:50">1:50</option>
                  <option value="1:100">1:100</option>
                </select>
              </div>
      
              <div>
                <label for="accountType" class="block  text-sm font-medium mb-1">Account Type</label>
                <select id="accountType" class="w-full bg-gray-50 p-2 border border-gray-300 rounded-md" required style="background-color: var( --card-bg-color);">
                  <option value="">--Select Account--</option>
                  <option value="Standard">Standard</option>
                  <option value="Premium">Premium</option>
                  <option value="VIP">VIP</option>
                </select>
              </div>
            </div>
      
            <button type="button" onclick="processForm()" class="w-full md:w-auto bg-green-500 text-white py-2 px-6 rounded-md hover:bg-green-600 mt-4 flex items-center">
              Process <span class="ml-2">&rarr;</span>
            </button>
          </form>
   
      
    </div>
  </div>
  <!-- main content here -->
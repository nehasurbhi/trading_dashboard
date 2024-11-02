 <!-- Main Container -->
 <div class=" mb-5 container mx-auto p-5">
 
        <!-- Title -->
        <div class="pb-3  flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-700">Referral Link</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 text-gray-800">/</span>
            <span class="text-gray-800">Referral Link</span>
        </nav>
    </div>

        <!-- Selected Account Dropdown -->
        <div class="bg-white shadow-lg p-6 my-3">
            <div class="mb-6">
                <label class="text-gray-700 font-medium block mb-2">Selected account</label>
                <select class="w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>529944</option>
                    <!-- Add more options if needed -->
                </select>
                <p class="text-xs text-gray-700 mt-1">Rewards will be received in the selected account</p>
            </div>

            <!-- Referral Link Section -->
            <div class="border-t border-gray-200 pt-4 mt-4 flex items-start">
                <!-- Notification Icon -->
                <span class="text-xl text-gray-600 mr-3">📢</span>

                <!-- Referral Link Information -->
                <div class="flex-1">
                    <p class="text-gray-700 font-semibold mb-1">You are an IB now.</p>
                    <div class="flex items-center bg-gray-100 p-2 rounded-md">
                        <input id="referralLink" class="w-full text-sm bg-transparent focus:outline-none" type="text" readonly value="https://crm.testcrm.co.in/Site/OpenAccount?id=29">
                        <button onclick="copyLink()" class="ml-3 px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-xs font-semibold rounded-md">
                            Copy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
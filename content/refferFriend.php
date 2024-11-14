
<h1 class="p-4 text-2xl font-semibold ">Referral Program</h1>
<div class="container mx-auto p-4">
<div class=" rounded-sm shadow-sm p-8 md:flex md:space-x-8 max-w-full w-full border border-gray-100" style="background-color: var( --card-bg-color); color: var(--text-color);">
        <!-- Left Side - Image and Heading -->
        <div class="md:w-1/2 flex flex-col items-center text-center md:text-left">
            <h2 class="text-2xl font-semibold  mb-4">Referral Program</h2>
            <img src="img\REFER_FRIEND.png" alt="Refer a Friend Illustration" class="mb-4 w-full max-w-sm">
        </div>

        <!-- Right Side - Referral Details -->
        <div class="md:w-1/2 flex flex-col items-center md:items-start text-center md:text-left">
            <h3 class="text-xl font-bold  mb-1">GIVE 10%, GET €10 EUR</h3>
            <p class=" font-medium mb-1">REFER A FRIEND</p>
            <p class=" mb-4">Give your friends 10% off, and earn €10 EUR off when they buy. One sharing more happy people.</p>
            
            <!-- Referral Link Input -->
            <div class="flex items-center w-full mb-4 border rounded-lg overflow-hidden">
                <input type="text" id="referralLink" value="https://crm.testcrm.co.in/Site/OpenAccount?id=30" 
                       class="p-2 w-full focus:outline-none text-gray-400" readonly style="background-color: var( --card-bg-color);">
                <button onclick="copyToClipboard()" 
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2">
                    📋
                </button>
            </div>

            <!-- Social Share Buttons -->
            <div class="flex space-x-4 mb-4">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-full">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 9h-4v-4h-4v4h-4v4h4v4h4v-4h4z"></path>
                    </svg>
                </a>
                <a href="#" class="bg-blue-400 hover:bg-blue-500 text-white p-2 rounded-full">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 6h-5v-2c0-.5.5-1 1-1h4v-3h-6c-2.2 0-4 1.8-4 4v3h-4v4h4v12h5v-12h4z"></path>
                    </svg>
                </a>
                <a href="#" class="bg-green-500 hover:bg-green-600 text-white p-2 rounded-full">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 2h-16c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-16c0-1.1-.9-2-2-2zm-5.7 14.3c-.4.5-.9.9-1.4 1.2-.3.2-.6.2-.9.2-.3 0-.6-.1-.9-.2l-2.3-.8c-.8-.3-1.5-.6-2-.9s-.8-.7-.7-1.4c0-.4.3-.7.8-1l.8-.5c.1-.1.3-.2.4-.2.2 0 .3.1.4.2l.4.5c.1.1.3.2.5.3.2 0 .3 0 .4-.1.1-.1.3-.3.4-.5.1-.1.1-.3.1-.5s-.1-.3-.2-.4l-.8-1.1c-.2-.3-.3-.5-.4-.7-.1-.2-.1-.4-.1-.7 0-.4.1-.7.2-.9.2-.3.4-.5.8-.6s.7-.1 1.2 0c.4.1.8.3 1.3.5.1.1.2.2.3.2l.2-.1c.3-.1.6-.2.9-.3.2-.1.4 0 .5.1.1.1.2.3.3.6.2.3.4.5.6.8.1.2.1.3 0 .5-.1.2-.2.4-.4.7l-.5.6c-.1.1-.2.2-.2.4s0 .3.2.5l.8.5c.3.2.5.4.5.5.1.5-.1 1-.5 1.5z"></path>
                    </svg>
                </a>
                <a href="#" class="bg-blue-300 hover:bg-blue-400 text-white p-2 rounded-full">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.3c-.9.4-1.9.6-2.9.7.8-.5 1.5-1.3 1.8-2.3-.8.5-1.7.9-2.6 1.1-.8-.9-2-1.4-3.2-1.4-2.5 0-4.5 2-4.5 4.5 0 .4 0 .8.1 1.2-3.8-.2-7.2-2-9.5-4.8-.4.6-.6 1.4-.6 2.1 0 1.5.8 2.8 2 3.5-.7 0-1.4-.2-2-.6v.1c0 2.1 1.5 3.8 3.4 4.2-.4.1-.8.1-1.2.1-.3 0-.6 0-.9-.1.6 2 2.3 3.5 4.3 3.5-1.6 1.3-3.6 2-5.7 2-.4 0-.8 0-1.1-.1 2 1.3 4.3 2 6.7 2 8 0 12.4-6.7 12.4-12.4 0-.2 0-.4 0-.5.9-.7 1.7-1.4 2.3-2.3z"></path>
                    </svg>
                </a>
            </div>

            <!-- Email Input -->
            <div class="flex items-center w-full border rounded-lg overflow-hidden">
                <input type="email" placeholder="Your friend's email address" 
                       class="p-2 w-full focus:outline-none" style="background-color: var( --card-bg-color);">
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2">
                    ✉️
                </button>
            </div>
        </div>
    </div>
    </div>
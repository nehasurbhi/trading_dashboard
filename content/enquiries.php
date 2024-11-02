<div class=" px-6 py-3 flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-700">Inbox</h1>
        <nav class="text-gray-500 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1">/</span>
            <span class="text-gray-700">Inbox</span>
        </nav>
    </div>

    <!-- Main Content Wrapper -->
    <div class="flex flex-grow p-6 space-x-4">
        
        <!-- Sidebar -->
        <div class="bg-white w-1/4 rounded-sm shadow-md">
            <h2 class="text-lg font-semibold text-gray-700 p-2 border-b">Folders</h2>
            <ul class="divide-y">
                <li class="px-4 py-3 hover:bg-gray-100 flex items-center space-x-2">
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 3a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2H9l-2-2H4z" />
                    </svg>
                    <span class="text-gray-700">Inbox</span>
                </li>
                <li class="px-4 py-3 hover:bg-gray-100 flex items-center space-x-2">
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 3h14a2 2 0 012 2v6a2 2 0 01-2 2H9l-2 2H3a2 2 0 01-2-2V5a2 2 0 012-2z" />
                    </svg>
                    <span class="text-gray-700">Compose</span>
                </li>
            </ul>
        </div>

        <!-- Inbox Section -->
        <div class="flex-grow bg-white rounded-sm shadow-md">
            <div class="flex justify-between items-center p-2 border-b">
                <h2 class="text-lg font-semibold text-gray-700">Inbox</h2>
                
                <!-- Search Box -->
                <div class="relative">
                    <input type="text" placeholder="Search Mail" class="pl-8 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <svg class="absolute left-2 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M12.9 14.32A8 8 0 1115 3a8.2 8.2 0 01-2.1 11.32l4.14 4.15-1.42 1.42-4.13-4.15zM6 9a3 3 0 106-0 3 3 0 00-6 0z" />
                    </svg>
                </div>
            </div>
            <!-- Inbox Content -->
            <div class="flex space-x-2 px-3">
                    <!-- Icons for actions -->
                    <button class="text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 4h10l-1 9H6L5 4zM3 4a1 1 0 011-1h12a1 1 0 011 1l1 9a2 2 0 01-2 2H5a2 2 0 01-2-2L3 4z" />
                        </svg>
                    </button>
                    <button class="text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 9a3 3 0 016 0v1h1a2 2 0 012 2v1a2 2 0 01-2 2h-1v1a3 3 0 01-6 0v-1H7a2 2 0 01-2-2v-1a2 2 0 012-2h1V9z" />
                        </svg>
                    </button>
                    <button class="text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7 7a2 2 0 014 0v1h1a2 2 0 012 2v1a2 2 0 01-2 2h-1v1a2 2 0 01-4 0v-1H6a2 2 0 01-2-2v-1a2 2 0 012-2h1V7z" />
                        </svg>
                    </button>
                    <button class="text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 8a4 4 0 014-4h4a4 4 0 014 4v4a4 4 0 01-4 4H8a4 4 0 01-4-4V8z" />
                        </svg>
                    </button>
                    <button class="text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 8a4 4 0 014-4h4a4 4 0 014 4v4a4 4 0 01-4 4H8a4 4 0 01-4-4V8z" />
                        </svg>
                    </button>
                </div>
            <div class="p-4 text-gray-600">No messages to display.</div>
        </div>
    </div>

 <!-- navbar -->
 <div class="py-2 px-6  flex items-center shadow-md  sticky top-0 left-0 z-30 " style="background-color: var(--sidebar-bg-color); color: var(--text-color);">
        <button class="text-lg font-semibold sidebar-toggle">
            <i class="ri-menu-line"></i>
        </button>

            <ul class="ml-auto flex items-center">

                <li class="dropdown ml-3">
                    <button type="button" class="dropdown-toggle flex items-center">
                        <div class="flex-shrink-0 w-10 h-10 relative">
                            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                <img class="w-8 h-8 rounded-full" src="https://laravelui.spruko.com/tailwind/ynex/build/assets/images/faces/9.jpg" alt=""/>
                                <div class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping"></div>
                                <div class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full"></div>
                            </div>
                        </div>
                        <div class="p-2 md:block text-left">
                            <h2 class="text-sm font-semibold text-gray-800">John Doe</h2>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>  
                                    <!-- Dropdown Icon -->
                                    <i class="ri-more-fill"></i>             
                    </button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50">Settings</a>
                        </li>
                        <li>
                            <form method="POST" action="">
                                <a role="menuitem" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50 cursor-pointer"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    Log Out
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>

                <button id="darkModeToggle" class="p-2 bg-gray-200 rounded-md focus:outline-none" style="color: var(--text-color);">
                <i class="ri-moon-line"></i>
            </button>
            </ul>
        </div>
        <!-- end navbar -->

        <script>
            document.getElementById('darkModeToggle').addEventListener('click', function() {
    document.documentElement.classList.toggle('dark');
    
  });
      const toggleButton = document.getElementById('darkModeToggle');
const body = document.body;

const savedMode = localStorage.getItem('theme') || 'light';
body.classList.add(savedMode === 'dark' ? 'dark-mode' : 'light-mode');

toggleButton.addEventListener('click', () => {
    if (body.classList.contains('light-mode')) {
        body.classList.replace('light-mode', 'dark-mode');
        localStorage.setItem('theme', 'dark');
    } else {
        body.classList.replace('dark-mode', 'light-mode');
        localStorage.setItem('theme', 'light');
    }
});


        </script>
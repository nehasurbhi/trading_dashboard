<?php
// Define the current page variable, for example:
$current_page = $_GET['page']; // This should be dynamically set, like from a query string

// Function to check and return 'active' or 'selected' class
function getActiveClass($pageName, $current_page) {
    return $pageName === $current_page ? 'bg-gray-950 text-white' : '';
}
?>


<!--sidenav -->
<div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-3 z-50 sidebar-menu transition-transform shadow-md">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
              <img src="img/visionfxtradelogo.png" alt="">
            <!-- <h2 class="font-bold text-2xl">LOREM <span class="bg-[#f84525] text-white px-2 rounded-md">IPSUM</span></h2> -->
        </a>
        <ul class="mt-4">
            <li class="mb-1 group">
                <a href="index.php?page=dashboard" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-800 hover:text-gray-100 rounded-md  <?php echo getActiveClass('dashboard', $current_page); ?>">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-800 hover:text-gray-100 rounded-md sidebar-dropdown-toggle">
                    <i class='bx bx-user mr-3 text-lg'></i>                
                    <span class="text-sm">Financial Operation</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="index.php?page=deposit" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Deposit</a>
                    </li> 
                    <li class="mb-4">
                        <a href="index.php?page=withdrawal" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Withdrawal</a>
                    </li> 
                    <li class="mb-4">
                        <a href="index.php?page=transfer" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Transfer</a>
                    </li> 
                    <li class="mb-4">
                        <a href="index.php?page=transHistory" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Transaction  History</a>
                    </li> 
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-800 hover:text-gray-100 rounded-md sidebar-dropdown-toggle">
                    <i class='bx bx-user mr-3 text-lg'></i>                
                    <span class="text-sm">My Account</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="index.php?page=newAccount" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Open New Account</a>
                    </li> 
                    <li class="mb-4">
                        <a href="index.php?page=accList" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Account List</a>
                    </li> 
                    <li class="mb-4">
                        <a href="index.php?page=tredingContest" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Trading Contest</a>
                    </li> 
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="index.php?page=tradingPlatform" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-800 hover:text-gray-100 rounded-md <?php echo getActiveClass('tradingPlatform', $current_page); ?>">
                    <i class='bx bx-list-ul mr-3 text-lg'></i>                
                    <span class="text-sm">Trading Platform</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="index.php?page=refferFriend" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-800 hover:text-gray-100 rounded-md  <?php echo getActiveClass('refferFriend', $current_page); ?>">
                    <i class='bx bx-list-ul mr-3 text-lg'></i>                
                    <span class="text-sm">Refer A Friend</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-800 hover:text-gray-100 rounded-md">
                    <i class='bx bx-list-ul mr-3 text-lg'></i>                
                    <span class="text-sm">Trading Signal</span>
                </a>
            </li>
          
            <li class="mb-1 group">
                <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-800 hover:text-gray-100 rounded-md sidebar-dropdown-toggle">
                    <i class='bx bxl-blogger mr-3 text-lg' ></i>                 
                    <span class="text-sm">Partener Zone</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="index.php?page=IbAccount" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Create a New IB Account</a>
                    </li> 
                    <li class="mb-4">
                        <a href="index.php?page=partenerDashboard" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Partner Dashboard</a>
                    </li> 
                    <li class="mb-4">
                        <a href="index.php?page=multiLevel" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Multi Level IB</a>
                    </li> 
                    <li class="mb-4">
                        <a href="index.php?page=IBAcc" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">IB Accounts</a>
                    </li> 
                    <li class="mb-4">
                        <a href="index.php?page=autoRebate" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Auto Rebate Report</a>
                    </li>  
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-800 hover:text-gray-100 rounded-md sidebar-dropdown-toggle">
                    <i class='bx bxl-blogger mr-3 text-lg' ></i>                 
                    <span class="text-sm">Customer Support</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="index.php?page=enquiries" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">My Enquiries</a>
                    </li> 
                    <!-- <li class="mb-4">
                        <a href="" class="text-gray-900 text-sm flex items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Categories</a>
                    </li>  -->
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="" class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-800 hover:text-gray-100 rounded-md sidebar-dropdown-toggle">
                    <i class='bx bxl-blogger mr-3 text-lg' ></i>                 
                    <span class="text-sm">Copy Trading</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Rating</a>
                    </li> 
                    <li class="mb-4">
                        <a href="" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Copier Area</a>
                    </li> 
                    <li class="mb-4">
                        <a href="" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Master Area</a>
                    </li> 
                    <li class="mb-4">
                        <a href="" class="text-gray-900 text-sm flex font-semibold items-center hover:text-blue-600 before:contents-[''] before:w-2 before:h-2 before:rounded-full before:bg-gray-300 before:mr-3">Terms Conditions</a>
                    </li> 
                </ul>
            </li>
        
        </ul>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
    <!-- end sidenav -->
  <!-- Content -->
  <div class="mb-5 container mx-auto p-4"  style="color: var(--text-color);">
    <div class="pb-3  flex justify-between items-center" style="color: var(--text-color);">
        <h1 class="text-2xl font-semibold" style="color: var(--text-color);">Dashboard</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 " style="color: var(--text-breadcrumbs-color);">/</span>
            <span class="" style="color: var(--text-breadcrumbs-color);">Dashboard</span>
        </nav>
    </div>
    
    
            <!-- top card start from here -->
            <div class="grid grid-cols-1 md:grid-cols-11 gap-3 mb-6" >
                <!-- First Part: One card in col-span-2 -->
                <div class=" rounded-sm border border-gray-100 p-1 shadow-md shadow-black/5 col-span-1 md:col-span-3" style="background-color: var( --card-bg-color); color: var(--text-color);">
                    <div class="flex justify-between">
                            <canvas class="p-2" id="chartDoughnut"></canvas>            
                    </div>   
                </div>
            
                <!-- Second Part: Four cards in col-span-4 -->
                
                <!-- Card 2: Spans 2 columns -->
                  <div class="col-span-2  rounded-sm border border-gray-100border border-gray-100 px-2 shadow-black/5 shadow-sm flex items-center  space-x-4" style="background-color: var( --card-bg-color); color: var(--text-color);">
                  <!-- Icon Container -->
                    <div class="flex-shrink-0">
                      <!-- Example Icon (replace with your image or SVG as needed) -->
                      <img src="img/icons/money-transfer.png" alt="Chart Icon" class="w-10 h-10" />
                    </div>
                    <!-- Text Content -->
                    <div>
                      <div class="text-sm font-medium " style="color: var(--card-text-color);">Available Balance</div>
                      <div class="text-2xl font-semibold text-purple-600">0</div>
                    </div>
                  </div>
  

                  <!-- Card 3: Spans 2 columns -->
                  <div class="col-span-2  rounded-sm border border-gray-100 px-2 shadow-black/5 shadow-sm flex items-center space-x-4" style="background-color: var( --card-bg-color); color: var(--text-color);">
                                  <!-- Icon Container -->
                                    <div class="flex-shrink-0">
                                      <!-- Example Icon (replace with your image or SVG as needed) -->
                                      <img src="img/icons/bar-chart.png" alt="Chart Icon" class="w-10 h-10" />
                                    </div>
                                    <!-- Text Content -->
                                    <div>
                                      <div class="text-sm font-medium " style="color: var(--card-text-color);">Total MT5 Account</div>
                                      <div class="text-2xl font-semibold text-purple-600">0</div>
                                    </div>
                  </div>

                  <!-- Card 4: Spans 2 columns -->
                  <div class="col-span-2  rounded-sm border border-gray-100 px-2 shadow-black/5 shadow-sm flex items-center space-x-4" style="background-color: var( --card-bg-color); color: var(--text-color);">
                                  <!-- Icon Container -->
                                    <div class="flex-shrink-0">
                                      <!-- Example Icon (replace with your image or SVG as needed) -->
                                      <img src="img/icons/save-money.png" alt="Chart Icon" class="w-10 h-10" />
                                    </div>
                                    <!-- Text Content -->
                                    <div>
                                      <div class="text-sm font-medium " style="color: var(--card-text-color);">Total Deposit</div>
                                      <div class="text-2xl font-semibold text-purple-600">0</div>
                                    </div>
                  </div>

                <!-- Card 5: Spans 2 columns -->
                <div class="col-span-2  rounded-sm border border-gray-100 px-2 shadow-black/5 shadow-sm flex items-center space-x-4" style="background-color: var( --card-bg-color); color: var(--text-color);">
                <!-- Icon Container -->
                  <div class="flex-shrink-0">
                    <!-- Example Icon (replace with your image or SVG as needed) -->
                    <img src="img/icons/atm.png" alt="Chart Icon" class="w-10 h-10" />
                  </div>
                  <!-- Text Content -->
                  <div>
                    <div class="text-sm font-medium " style="color: var(--card-text-color);">Total Withdrawl</div>
                    <div class="text-2xl font-semibold text-purple-600">0</div>
                  </div>
                </div>
            </div>
            <!-- top card end -->


            <!-- graph start from here  -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                
                <div class=" border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2" style="background-color: var( --card-bg-color); color: var(--text-color);">
                   
                   
                    <div>
                        <canvas id="order-chart"></canvas>
                    </div>
                </div>
                <div class=" border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md" style="background-color: var( --card-bg-color); color: var(--text-color);">
                    <div class="flex justify-between mb-4 items-start">
                       
                       
                    </div>
                    <div class="overflow-x-auto w-full h-auto flex justify-center items-center">
                        <div class=" p-2 text-center">
                       <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 511.56264 532.44842" class="" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="454.49103 405.20843 454.48102 405.44842 466.49103 532.44842 378.85101 532.44842 367.49103 454.44842 362.49103 530.44842 272.49103 529.44842 282.05103 429.66839 290.18103 383.41839 290.18103 383.40838 291.401 376.44842 452.10101 376.44842 452.31103 378.96838 454.49103 405.20843" fill="#2f2e41"/><path d="M222.88285,478.83064c9.28179,1.69101,18.96019-8.76188,21.61758-23.34779,1.16327-6.38475,.78778-12.50277-.78019-17.50611l1.42323-8.40799,23.88334-113.10923s43.98031-87.97522,43.9791-103.24828c-.00111-15.27287-12.72223-22.76282-12.72223-22.76282l-17.21435,.16096-53.98264,131.84662-9.72217,97.42982-1.57289,13.36711c-3.2316,4.12897-5.74053,9.72145-6.90332,16.10621-2.65749,14.58572,2.71275,27.78048,11.99454,29.4715Z" fill="#ffb6b6"/><polygon points="397.99103 135.94842 381.99103 98.94842 329.99103 107.94842 326.49103 151.47992 397.99103 135.94842" fill="#ffb6b6"/><polygon points="397.99103 135.94842 381.99103 98.94842 329.99103 107.94842 326.49103 151.47992 397.99103 135.94842" opacity=".1"/><path d="M510.99121,212.9484s-37-69-44-76c-3.11621-3.11621-8.01465-3.15955-12.49316-2.25134l-51.50684-17.74866-17.45801-9.8092-1.15039,18.66199-57.31543,10.28748c.31836-11.38086,1.92383-15.70972,1.92383-15.70972l-21,24.56946-41,20,.02246,.18005c-3.00879,1.05029-5.86133,2.84741-8.02246,5.81995-8,11-30,145-30,145l47,10,6.39648-40.13953,4.60352,36.13953,3.5,67.5s64,55,95,35,69-19,69-19l.94824-31.28796c.6748-1.07861,1.05176-1.71204,1.05176-1.71204l-1-110.98425v-29.5321c7.61816,10.61353,16.81152,19.74109,27.5,24.01636,35,14,28-43,28-43Z" fill="#e6e6e6"/><circle cx="350.55585" cy="66.61991" r="47.83848" fill="#ffb6b6"/><path d="M384.87476,80.13948s4.15987-14.55954,13.51957-13.51957c9.3597,1.03997,11.43964-7.27977,9.3597-11.43964-2.07993-4.15987-6.2398-24.95921-6.2398-24.95921,0,0,2.07993-14.55954-10.39967-16.63947-12.4796-2.07993-16.63947-4.15987-18.71941-8.31974-2.07993-4.15987-33.27894-8.31974-43.67861-2.07993-10.39967,6.2398-18.71941,18.2117-25.99917,21.58546-7.27977,3.37375-13.51957,9.61355-9.3597,20.01322,4.15987,10.39967,10.19286,30.7392,10.19286,30.7392,0,0,10.60648-3.70006,12.68641,2.53974,2.07993,6.2398-6.2398-2.07993,4.15987-18.71941,10.39967-16.63947,10.39967-33.27894,27.03914-27.03914,16.63947,6.2398,35.35888,4.15987,33.27894,16.63947-2.07993,12.4796,4.15987,31.19901,4.15987,31.19901Z" fill="#2f2e41"/><g><path d="M381.94946,459.38422H18.63322c-10.27456,0-18.63322-8.35942-18.63322-18.63322V247.758c0-10.2738,8.35866-18.63322,18.63322-18.63322H381.94946c10.27456,0,18.63322,8.35942,18.63322,18.63322v192.993c0,10.2738-8.35866,18.63322-18.63322,18.63322Z" fill="#fff"/><path d="M381.94946,459.38422H18.63322c-10.27456,0-18.63322-8.35942-18.63322-18.63322V247.758c0-10.2738,8.35866-18.63322,18.63322-18.63322H381.94946c10.27456,0,18.63322,8.35942,18.63322,18.63322v192.993c0,10.2738-8.35866,18.63322-18.63322,18.63322ZM18.63322,232.23639c-8.55846,0-15.52161,6.96315-15.52161,15.52161v192.993c0,8.55846,6.96315,15.52161,15.52161,15.52161H381.94946c8.55846,0,15.52161-6.96315,15.52161-15.52161V247.758c0-8.55846-6.96315-15.52161-15.52161-15.52161H18.63322Z" fill="#3f3d56"/><circle cx="353.90847" cy="247.79446" r="4.66742" fill="#3f3d56"/><circle cx="366.35492" cy="247.79446" r="4.66742" fill="#3f3d56"/><circle cx="378.80138" cy="247.79446" r="4.66742" fill="#3f3d56"/><path d="M26.44872,323.2511c-1.28688,0-2.33371,1.04683-2.33371,2.33371,0,.62749,.24234,1.20788,.68218,1.63633,.44365,.45428,1.0248,.69738,1.65153,.69738H375.68976c1.28688,0,2.33371-1.04683,2.33371-2.33371,0-.62749-.24234-1.20788-.68218-1.63633-.44365-.45428-1.0248-.69738-1.65153-.69738H26.44872Z" fill="#e6e6e6"/><path d="M332.12717,322.4732v6.22323H26.44872c-.85567,0-1.63358-.34233-2.19365-.91797-.57574-.56007-.91797-1.33797-.91797-2.19365,0-1.71144,1.40026-3.11161,3.11161-3.11161H332.12717Z" fill="#539cfe"/><path d="M371.80025,310.80464h-31.11614c-3.43144,0-6.22323-2.79103-6.22323-6.22323s2.79179-6.22323,6.22323-6.22323h31.11614c3.43144,0,6.22323,2.79103,6.22323,6.22323s-2.79179,6.22323-6.22323,6.22323Z" fill="#e6e6e6"/><path d="M167.98953,278.1327H28.78243c-3.43144,0-6.22323-2.79103-6.22323-6.22323s2.79179-6.22323,6.22323-6.22323H167.98953c3.43144,0,6.22323,2.79103,6.22323,6.22323s-2.79179,6.22323-6.22323,6.22323Z" fill="#e6e6e6"/><path d="M26.44872,393.26242c-1.28688,0-2.33371,1.04683-2.33371,2.33371,0,.62749,.24234,1.20788,.68218,1.63633,.44365,.45428,1.0248,.69738,1.65153,.69738H375.68976c1.28688,0,2.33371-1.04683,2.33371-2.33371,0-.62749-.24234-1.20788-.68218-1.63633-.44365-.45428-1.0248-.69738-1.65153-.69738H26.44872Z" fill="#e6e6e6"/><path d="M212.33003,392.48451v6.22323H26.44872c-.85567,0-1.63358-.34233-2.19365-.91797-.57574-.56007-.91797-1.33797-.91797-2.19365,0-1.71144,1.40026-3.11161,3.11161-3.11161H212.33003Z" fill="#539cfe"/><path d="M371.80025,380.81596h-31.11614c-3.43144,0-6.22323-2.79103-6.22323-6.22323s2.79179-6.22323,6.22323-6.22323h31.11614c3.43144,0,6.22323,2.79103,6.22323,6.22323s-2.79179,6.22323-6.22323,6.22323Z" fill="#e6e6e6"/></g><g><ellipse cx="426.27357" cy="70.44086" rx="48.72643" ry="47.69976" fill="#539cfe"/><path d="M442.81136,46.3808c-6.487,11.81215-12.97405,23.62439-19.46106,35.43659-4.13442-7.30499-8.24624-14.62285-12.39083-21.92211-1.43136-2.5209-5.32473-.25351-3.88976,2.27368,4.80448,8.46149,9.55919,16.95111,14.36367,25.41259,.82147,1.44676,3.07677,1.48035,3.8898,0,7.12599-12.9757,14.25199-25.95141,21.37798-38.92707,1.39635-2.54258-2.4924-4.81822-3.8898-2.27368Z" fill="#fff"/></g><path d="M493.53827,196.17181l-48.54724-23.22339s-1.94983-15.5437-11.05402-21.08789c-1.54779-3.6925-3.32855-7.74908-4.94598-10.96332-4-7.94879,2-22.94879-3-22.94879s-12.39122,15.77543-12,20c.30031,3.24292,2.98059,8.90472,3.5343,13.8609-6.09709,2.29949-11.01564,6.24084-14.24964,9.37903-2.79865,2.71575-3.8385,6.76755-2.74475,10.51073,3.16948,10.84703,11.09153,33.24933,22.46008,33.24933,15,0,19-3,19-3,0,0,31,39,54,42s-2.45276-47.77661-2.45276-47.77661Z" fill="#ffb6b6"/>
                    </svg>
                    
                    </div>
                    
                    </div>
                    <div>
                        <div class="text-center">
                            <h2 class="text-2xl font-bold mb-2">Open Account</h2>
    
                            <!-- Paragraph -->
                            <p class=" mb-4" style="color: var(--card-text-color);">Get access to premium features by upgrading your plan today.</p>
                        
                            <!-- Button -->
                            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                            Open Account
                            </button>
                         </div>
                    </div>
                </div>
            </div>
            <!-- graph end -->

            <!-- table start from here -->
            <div class="container mx-auto my-5 border border-gray-200 " style="margin-bottom:50px;">
                <h2 class="text-xl font-bold px-4 py-2 " style="background-color: var( --card-bg-color); color: var(--text-color);">Account List</h2>
                
                <div class="overflow-x-auto">
                  <table class="min-w-full  border-collapse border border-gray-300" style="background-color: var( --card-bg-color); color: var(--text-color);">
                    <thead class="border border-gray-300" style="background-color: var(--bg-list); ">
                      <tr style="color: var(--text-color);">
                        <th class="px-4 py-2 border border-gray-300 text-left  font-semibold text-sm">Account Number</th>
                        <th class="px-4 py-2 border border-gray-300 text-left  font-semibold text-sm">Type</th>
                        <th class="px-4 py-2 border border-gray-300 text-left  font-semibold text-sm">Leverage</th>
                        <th class="px-4 py-2 border border-gray-300 text-left  font-semibold text-sm">Balance</th>
                        <th class="px-4 py-2 border border-gray-300 text-left  font-semibold text-sm">Equity</th>
                        <th class="px-4 py-2 border border-gray-300 text-center  font-semibold text-sm">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- First row -->
                      <tr>
                        <td class="px-4 py-2 border border-gray-300 text-sm">
                          <a href="#" class="text-blue-600 font-bold">3667579</a>
                        </td>
                        <td class="px-4 py-2 border border-gray-300 text-sm">BASIC</td>
                        <td class="px-4 py-2 border border-gray-300 text-sm">1:500</td>
                        <td class="px-4 py-2 border border-gray-300 text-green-600 font-bold text-sm">0</td>
                        <td class="px-4 py-2 border border-gray-300 text-green-600 font-bold text-sm">0</td>
                        <td class="px-4 py-2 border border-gray-300 text-center text-sm">
                          <button class="text-blue-500 hover:text-blue-600 mx-1">
                            <i class="fas fa-arrow-left"></i>
                          </button>
                          <button class="text-blue-500 hover:text-blue-600 mx-1">
                            <i class="fas fa-sync-alt"></i>
                          </button>
                          <button class="text-blue-500 hover:text-blue-600 mx-1">
                            <i class="fas fa-arrow-right"></i>
                          </button>
                          <button class="text-blue-500 hover:text-blue-600 mx-1">
                            <i class="fas fa-cog"></i>
                          </button>
                        </td>
                      </tr>
                      <!-- Second row -->
                      <tr>
                        <td class="px-4 py-2 border border-gray-300 text-sm">
                          <a href="#" class="text-blue-600 font-bold">745198</a>
                        </td>
                        <td class="px-4 py-2 border border-gray-300 text-sm">ECN ACCOUNT</td>
                        <td class="px-4 py-2 border border-gray-300 text-sm">1:400</td>
                        <td class="px-4 py-2 border border-gray-300 text-green-600 font-bold text-sm">0</td>
                        <td class="px-4 py-2 border border-gray-300 text-green-600 font-bold text-sm">0</td>
                        <td class="px-4 py-2 border border-gray-300 text-center text-sm">
                          <button class="text-blue-500 hover:text-blue-600 mx-1">
                            <i class="fas fa-arrow-left"></i>
                          </button>
                          <button class="text-blue-500 hover:text-blue-600 mx-1">
                            <i class="fas fa-sync-alt"></i>
                          </button>
                          <button class="text-blue-500 hover:text-blue-600 mx-1">
                            <i class="fas fa-arrow-right"></i>
                          </button>
                          <button class="text-blue-500 hover:text-blue-600 mx-1">
                            <i class="fas fa-cog"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
               
            <!-- table end here -->  
           
        </div>
      <!-- End Content -->
      
  
       
       
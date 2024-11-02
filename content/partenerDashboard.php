 <!-- Container -->
 <div class="container mx-auto p-4">

<!-- Dashboard Header and Breadcrumb -->
<div class="pb-3  flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-700">Partner Dashboard</h1>
        <nav class="text-blue-400 text-sm">
            <a href="#" class="hover:text-blue-500">Home</a>
            <span class="mx-1 text-gray-800">/</span>
            <span class="text-gray-800">Partner Dashboard</span>
        </nav>
    </div>

<!-- Partner Amount Section -->
<div class="bg-white shadow-md rounded-lg p-4 mb-6">
  <h2 class="text-lg font-semibold text-gray-700 mb-2">Partner Amount</h2>
  <hr class="mb-4">
  <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    
    <!-- Card 1 -->
    <div class="bg-green-50 p-4 rounded-lg shadow-md flex flex-col items-center">
      <div class="text-sm text-gray-500 mb-2">Partner Account No.</div>
      <div class="text-2xl font-semibold mb-4">266937</div>
      <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md w-full">Apply For Rebate</button>
    </div>

    <!-- Card 2 -->
    <div class="bg-green-50 p-4 rounded-lg shadow-md flex flex-col items-center">
      <div class="text-sm text-gray-500 mb-2">$0.00</div>
      <div class="text-xs text-gray-500 mb-4">Available Balance</div>
      <div class="flex gap-2">
        <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md">Transfer Rebate</button>
        <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md">Withdraw Rebate</button>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-green-50 p-4 rounded-lg shadow-md flex flex-col items-center">
      <div class="text-sm text-gray-500 mb-2">Total Commission</div>
      <div class="text-2xl font-semibold mb-4">$0.00</div>
      <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md w-full">Apply For Rebate</button>
    </div>

    <!-- Card 4 -->
    <div class="bg-green-50 p-4 rounded-lg shadow-md flex flex-col items-center">
      <div class="text-sm text-gray-500 mb-2">Total Volume</div>
      <div class="text-2xl font-semibold mb-4">0.00</div>
      <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md w-full">Click Here</button>
    </div>

  </div>
</div>

<!-- IB Link Section -->
<div class="bg-white shadow-md rounded-lg py-2 px-4 mb-6 flex items-center justify-between">
  <span class="text-gray-600 text-sm">Your IB Link: https://crm.testcrm.co.in/Site/OpenAccount?id=30</span>
  <button class="bg-blue-500 text-white px-4 py-2 rounded-md">COPY</button>
</div>

<!-- Buttons Section -->
<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">

  <!-- Deposit History Button -->
  <div class="bg-green-500 p-4 rounded-lg text-center text-white">
    <div class="text-lg font-bold mb-2">Deposit History</div>
    <button class="bg-green-600 text-white px-4 py-2 rounded-md w-full">Click Here</button>
  </div>

  <!-- Pending Deposit History Button -->
  <div class="bg-blue-500 p-4 rounded-lg text-center text-white">
    <div class="text-lg font-bold mb-2">Pending Deposit History</div>
    <button class="bg-blue-600 text-white px-4 py-2 rounded-md w-full">Click Here</button>
  </div>

  <!-- Withdraw History Button -->
  <div class="bg-red-500 p-4 rounded-lg text-center text-white">
    <div class="text-lg font-bold mb-2">Withdraw History</div>
    <button class="bg-red-600 text-white px-4 py-2 rounded-md w-full">Click Here</button>
  </div>

  <!-- Total Accounts Button -->
  <div class="bg-yellow-500 p-4 rounded-lg text-center text-white">
    <div class="text-lg font-bold mb-2">Total Accounts</div>
    <button class="bg-yellow-600 text-white px-4 py-2 rounded-md w-full">Click Here</button>
  </div>

  <!-- Total Clients Button -->
  <div class="bg-gray-500 p-4 rounded-lg text-center text-white">
    <div class="text-lg font-bold mb-2">Total Clients</div>
    <span class="text-xl font-bold">0</span>
  </div>

  <!-- Recently Opened Accounts Button -->
  <div class="bg-blue-600 p-4 rounded-lg text-center text-white">
    <div class="text-lg font-bold mb-2">Recently Opened Accounts</div>
    <button class="bg-blue-700 text-white px-4 py-2 rounded-md w-full">Click Here</button>
  </div>

</div>

<!-- chart -->
 <div class="flex items-center justify-center my-5">
<div class="w-full max-w-full p-4 bg-white rounded-lg shadow-lg">
    <h2 class="text-xl font-semibold text-teal-600 mb-4">Monthly Recap Report</h2>
    <div class="relative h-64">
        <canvas id="monthlyRecapChart"></canvas>
    </div>
</div>
</div>
</div>
<script>
    $(document).ready(function () {
        const ctx = document.getElementById('monthlyRecapChart').getContext('2d');
        const monthlyRecapChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [
                    {
                        label: 'Withdrawal',
                        data: [1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                        backgroundColor: 'rgba(255, 0, 0, 0.8)',
                    },
                    {
                        label: 'Volume',
                        data: [1.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                        backgroundColor: 'rgba(255, 255, 0, 0.8)',
                    },
                    {
                        label: 'Deposit',
                        data: [1.3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                        backgroundColor: 'rgba(0, 128, 0, 0.8)',
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 1.15,
                        max: 1.5
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            boxWidth: 20,
                            padding: 15
                        }
                    }
                }
            }
        });
    });
</script>
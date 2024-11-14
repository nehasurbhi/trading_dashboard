
// start: Sidebar
const sidebarToggle = document.querySelector('.sidebar-toggle')
const sidebarOverlay = document.querySelector('.sidebar-overlay')
const sidebarMenu = document.querySelector('.sidebar-menu')
const main = document.querySelector('.main')
sidebarToggle.addEventListener('click', function (e) {
    e.preventDefault()
    main.classList.toggle('active')
    sidebarOverlay.classList.toggle('hidden')
    sidebarMenu.classList.toggle('-translate-x-full')
})
sidebarOverlay.addEventListener('click', function (e) {
    e.preventDefault()
    main.classList.add('active')
    sidebarOverlay.classList.add('hidden')
    sidebarMenu.classList.add('-translate-x-full')
})
document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (item) {
    item.addEventListener('click', function (e) {
        e.preventDefault()
        const parent = item.closest('.group')
        if (parent.classList.contains('selected')) {
            parent.classList.remove('selected')
        } else {
            document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (i) {
                i.closest('.group').classList.remove('selected')
            })
            parent.classList.add('selected')
        }
    })
})
// end: Sidebar



// start: Popper
const popperInstance = {}
document.querySelectorAll('.dropdown').forEach(function (item, index) {
    const popperId = 'popper-' + index
    const toggle = item.querySelector('.dropdown-toggle')
    const menu = item.querySelector('.dropdown-menu')
    menu.dataset.popperId = popperId
    popperInstance[popperId] = Popper.createPopper(toggle, menu, {
        modifiers: [
            {
                name: 'offset',
                options: {
                    offset: [0, 8],
                },
            },
            {
                name: 'preventOverflow',
                options: {
                    padding: 24,
                },
            },
        ],
        placement: 'bottom-end'
    });
})
document.addEventListener('click', function (e) {
    const toggle = e.target.closest('.dropdown-toggle')
    const menu = e.target.closest('.dropdown-menu')
    if (toggle) {
        const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
        const popperId = menuEl.dataset.popperId
        if (menuEl.classList.contains('hidden')) {
            hideDropdown()
            menuEl.classList.remove('hidden')
            showPopper(popperId)
        } else {
            menuEl.classList.add('hidden')
            hidePopper(popperId)
        }
    } else if (!menu) {
        hideDropdown()
    }
})

function hideDropdown() {
    document.querySelectorAll('.dropdown-menu').forEach(function (item) {
        item.classList.add('hidden')
    })
}
function showPopper(popperId) {
    popperInstance[popperId].setOptions(function (options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: 'eventListeners', enabled: true },
            ],
        }
    });
    popperInstance[popperId].update();
}
function hidePopper(popperId) {
    popperInstance[popperId].setOptions(function (options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: 'eventListeners', enabled: false },
            ],
        }
    });
}
// end: Popper

//    doughnut start

const dataDoughnut = {
labels: ["JavaScript", "Python", "Ruby"],
datasets: [
{
  label: "My First Dataset",
  data: [300, 50, 100],
  backgroundColor: [
    "rgb(133, 105, 241)",
    "rgb(164, 101, 241)",
    "rgb(101, 143, 241)",
  ],
  hoverOffset: 4,
},
],
};

const configDoughnut = {
type: "doughnut",
data: dataDoughnut,
options: {
cutout: '65%', // Adjust this value to change the thickness of the doughnut
    responsive: true,
    maintainAspectRatio: false, // Allows you to set a custom size in CSS
    aspectRatio: 1,
    plugins: {
        legend: {
            display: true,
            position: 'right', // Set legend position to right
            align: 'center', // Align legend items vertically centered
        },
    },
},
};

var chartBar = new Chart(
document.getElementById("chartDoughnut"),
configDoughnut
);
// doughnut end

// start: Chart
new Chart(document.getElementById('order-chart'), {
    type: 'line',
    data: {
        labels: generateNDays(7),
        datasets: [
            {
                label: 'Active',
                data: generateRandomData(7),
                borderWidth: 1,
                fill: true,
                pointBackgroundColor: 'rgb(59, 130, 246)',
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgb(59 130 246 / .05)',
                tension: .2
            },
            {
                label: 'Completed',
                data: generateRandomData(7),
                borderWidth: 1,
                fill: true,
                pointBackgroundColor: 'rgb(16, 185, 129)',
                borderColor: 'rgb(16, 185, 129)',
                backgroundColor: 'rgb(16 185 129 / .05)',
                tension: .2
            },
            {
                label: 'Canceled',
                data: generateRandomData(7),
                borderWidth: 1,
                fill: true,
                pointBackgroundColor: 'rgb(244, 63, 94)',
                borderColor: 'rgb(244, 63, 94)',
                backgroundColor: 'rgb(244 63 94 / .05)',
                tension: .2
            },
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

function generateNDays(n) {
    const data = []
    for(let i=0; i<n; i++) {
        const date = new Date()
        date.setDate(date.getDate()-i)
        data.push(date.toLocaleString('en-US', {
            month: 'short',
            day: 'numeric'
        }))
    }
    return data
}
function generateRandomData(n) {
    const data = []
    for(let i=0; i<n; i++) {
        data.push(Math.round(Math.random() * 10))
    }
    return data
}
// end: Chart

 // newAccount form js start
 function processForm() {
    const leverage = document.getElementById('leverage').value;
    const accountType = document.getElementById('accountType').value;

    if (leverage && accountType) {
      alert(`Account Created with Leverage: ${leverage} and Account Type: ${accountType}`);
    } else {
      alert('Please select both leverage and account type.');
    }
  }

  // newAccount form js end

//   copy button IbAccount js
function copyLink() {
    const referralLink = document.getElementById("referralLink");
    referralLink.select();
    referralLink.setSelectionRange(0, 99999); // For mobile devices
    document.execCommand("copy");
    alert("Referral link copied to clipboard!");
}

// partner dashboard chart start from here
// document.addEventListener("DOMContentLoaded", function() {
//     const canvas = document.getElementById('monthlyRecapChart');
    
//     if (canvas) {
//         const ctx = canvas.getContext('2d');
        
//         if (ctx) {
//             new Chart(ctx, {
//                 type: 'bar',
//                 data: {
//                     labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
//                     datasets: [
//                         {
//                             label: 'Withdrawal',
//                             data: [1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
//                             backgroundColor: 'rgba(255, 0, 0, 0.8)',
//                         },
//                         {
//                             label: 'Volume',
//                             data: [1.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
//                             backgroundColor: 'rgba(255, 255, 0, 0.8)',
//                         },
//                         {
//                             label: 'Deposit',
//                             data: [1.3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
//                             backgroundColor: 'rgba(0, 128, 0, 0.8)',
//                         }
//                     ]
//                 },
//                 options: {
//                     responsive: true,
//                     maintainAspectRatio: false,
//                     scales: {
//                         y: {
//                             beginAtZero: true,
//                             min: 1.15,
//                             max: 1.5
//                         }
//                     },
//                     plugins: {
//                         legend: {
//                             position: 'top',
//                             labels: {
//                                 boxWidth: 20,
//                                 padding: 15
//                             }
//                         }
//                     }
//                 }
//             });
//         } else {
//             console.error("Failed to get 2D context from canvas.");
//         }
//     } else {
//         console.error("Canvas element with ID 'monthlyRecapChart' not found.");
//     }
// });
// refer a friend js start
function copyToClipboard() {
    const input = document.getElementById("referralLink");
    input.select();
    input.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(input.value);
    alert("Link copied to clipboard!");
};

// <!-- JavaScript for Dark Mode Toggle -->
function showContent(id, button) {
    // Hide all buttons except the clicked one
    document.querySelectorAll('.payment-method').forEach(btn => {
      if (btn !== button) {
        btn.classList.add('hidden');
      }
    });

    // Hide all content sections
    document.querySelectorAll('.content-section').forEach(section => section.classList.add('hidden'));
    
    // Show the selected content section
    document.getElementById(id).classList.remove('hidden');
    
    // Update selected payment method text
    const selectedMethodText = {
      'indian-cash': 'Indian Cash',
      'india-local-banks': 'India Local Banks',
      'bitcoin': 'Bitcoin',
      'tether-trc20': 'Tether (TRC20)',
      'ethereum': 'Ethereum',
      'net-banking': 'India Net Banking',
      'tRON': 'TRON (TRX)'
    };
    document.getElementById('selected-method').textContent = selectedMethodText[id];
  }

  function copyToClipboard(text) {
    // Copy the account number to the clipboard
    navigator.clipboard.writeText(text).then(() => {
      alert('Account number copied to clipboard');
    }).catch(err => {
      console.error('Failed to copy text: ', err);
    });
  }

//   Deposite copyLink
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
      alert('Account number copied to clipboard');
    }).catch(err => {
      console.error('Failed to copy text: ', err);
    });
  }




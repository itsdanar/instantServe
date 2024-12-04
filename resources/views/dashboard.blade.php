<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Dashboard</title>
    <script>
        function openTab(evt, tabName) {
            let tabContent = document.getElementsByClassName("tab-content");
            for (let i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none";
            }
            let tabLinks = document.getElementsByClassName("tab-link");
            for (let i = 0; i < tabLinks.length; i++) {
                tabLinks[i].classList.remove("text-blue-600", "border-blue-600");
                tabLinks[i].classList.add("text-gray-600");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("text-blue-600", "border-blue-600");
            evt.currentTarget.classList.remove("text-gray-600");
        }
        window.onload = function() {
            document.getElementById("defaultOpen").click();
        }
    </script>
</head>

<body class="bg-gray-100 font-sans">
@include('components.admin-navbar')
<div class="flex pt-16">
@include('components.admin-sidebar')

    <div class="ml-64 pt-10 w-full p-6">
        <div class="relative">
            <div class="flex overflow-x-scroll space-x-4">
                <img src="{{ asset('images/istockphoto-538706483-170667a.jpg') }}" alt="Galaxy Laundry 1" class="rounded-lg shadow-md w-full">
                <img src="{{ asset('images/istockphoto-538706483-170667a.jpg') }}" alt="Galaxy Laundry 2" class="rounded-lg shadow-md w-full">
                <img src="{{ asset('images/istockphoto-538706483-170667a.jpg') }}" alt="Galaxy Laundry 3" class="rounded-lg shadow-md w-full">
            </div>
            <div class="absolute bottom-2 left-2 bg-white rounded-md px-2 py-1 text-sm text-gray-800">3/15</div>
        </div>


        <div class="mt-6">
            <h1 class="text-3xl font-bold text-gray-800">Galaxy Laundry</h1>
            <div class="flex items-center mt-2">
                <span class="text-yellow-500"><i class="fas fa-star"></i> 4.0</span>
            </div>
            <div class="bg-blue-100 text-blue-800 mt-4 p-3 rounded-lg">
                <p><i class="fas fa-shield-alt"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec facilisis.</p>
            </div>
        </div>


        <div class="mt-8 border-b-2 border-gray-200">
            <button id="defaultOpen" class="tab-link py-2 px-4 text-blue-600 border-b-2 border-blue-600" onclick="openTab(event, 'overview')">Ringkasan</button>
            <button class="tab-link py-2 px-4 text-gray-600 border-b-2 border-transparent" onclick="openTab(event, 'jasa')">Layanan</button>
            <button class="tab-link py-2 px-4 text-gray-600 border-b-2 border-transparent" onclick="openTab(event, 'reviews')">Ulasan</button>
            <button class="tab-link py-2 px-4 text-gray-600 border-b-2 border-transparent" onclick="openTab(event, 'location')">Lokasi</button>
        </div>


        <div id="overview" class="tab-content mt-6">
            <h2 class="text-xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
            <ul class="mt-4 text-gray-700 space-y-2">
                <li><i class="fas fa-check-circle text-green-500"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li><i class="fas fa-check-circle text-green-500"></i> Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</li>
                <li><i class="fas fa-check-circle text-green-500"></i> Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            </ul>
        </div>


        <div id="jasa" class="tab-content mt-6" style="display:none;">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Jasa/Layanan Kami</h3>
            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700">Cuci</h4>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700">Cuci dan Setrika</h4>
                    <p class="text-gray-600">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700">Setrika</h4>
                    <p class="text-gray-600">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>


        <div id="reviews" class="tab-content mt-6" style="display:none;">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Ulasan Pelanggan</h3>
            <div class="space-y-4">

                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-500"><i class="fas fa-star"></i> 5.0</span>
                        <span class="ml-2 text-gray-800 font-semibold">Tugus</span>
                    </div>
                    <p class="text-gray-600">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pakaian saya bersih dan rapi!"</p>


                    <div class="mt-4">
                        <textarea id="reply-input-1" class="w-full p-2 border border-gray-300 rounded" placeholder="Tulis balasan..."></textarea>
                        <button onclick="submitReply(1)" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Balas</button>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex items-center mb-2">
                        <span class="text-yellow-500"><i class="fas fa-star"></i> 5.0</span>
                        <span class="ml-2 text-gray-800 font-semibold">Arya</span>
                    </div>
                    <p class="text-gray-600">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pakaian saya bersih dan rapi!"</p>


                    <div class="mt-4">
                        <textarea id="reply-input-1" class="w-full p-2 border border-gray-300 rounded" placeholder="Tulis balasan..."></textarea>
                        <button onclick="submitReply(1)" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Balas</button>
                    </div>
                </div>
            </div>
        </div>


        <div id="location" class="tab-content mt-6" style="display:none;">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Lokasi Kami</h3>
            <div class="border border-gray-300 rounded-lg overflow-hidden shadow-md">

                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.9121632271526!2d-122.08424968468324!3d37.42206597982456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb24c88e8edb1%3A0x4c9efb9f4c87b8b2!2sGoogleplex!5e0!3m2!1sen!2sus!4v1616075841564!5m2!1sen!2sus" 
                    width="100%" 
                    height="300" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.dropdown-btn').forEach(button => {
        button.addEventListener('click', () => {
            const dropdown = button.nextElementSibling;
            dropdown.classList.toggle('hidden');
        });
    });

    document.querySelectorAll('.day-container').forEach(dayContainer => {
        const cardContainer = dayContainer.querySelector('.card-container');
        const noDataMessage = dayContainer.querySelector('.no-data');
        if (cardContainer.children.length === 0) {
            noDataMessage.classList.remove('hidden');
        }
    });
</script>

</body>

</html>

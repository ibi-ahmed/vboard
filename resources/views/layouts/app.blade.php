<!doctype html>
<html lang="en">
@include('layouts.header')
<body>
@include('layouts.navigation')
@include('layouts.sidebar')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" class="lg:ps-[260px] pt-[59px] ">
    <div class="p-2 sm:p-5 sm:py-0 md:pt-5 space-y-5">
        <!-- Card -->
        <div class="p-4 flex flex-col justify-center h-72 md:h-96 min-h-[calc(100vh-115px)] sm:min-h-[calc(100vh-143px)]  bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="relative h-full border border-dashed border-gray-200 rounded-xl overflow-hidden">
                    @yield('content')
            </div>
        </div>
        <!-- End Card -->
    </div>
</main>
<x-search />
<!-- ========== END MAIN CONTENT ========== -->
@include('layouts.footer')
</body>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</html>

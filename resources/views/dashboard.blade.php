<x-app-layout>
    


<div id="default-carousel" class="relative w-full py-1 px-5" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-96">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="https://c4.wallpaperflare.com/wallpaper/960/241/287/colorful-technology-minimalism-mixed-media-wallpaper-preview.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="https://c0.wallpaperflare.com/preview/304/131/640/beverage-blog-blogger-browsing.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="https://c0.wallpaperflare.com/preview/285/218/457/table-notepad-coolie-orchid.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="duration-700 ease-in-out" data-carousel-item>
            <img src="https://c1.wallpaperflare.com/preview/532/355/774/desk-style-blogger-blog.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class=" duration-700 ease-in-out" data-carousel-item>
            <img src="https://c0.wallpaperflare.com/preview/304/131/640/beverage-blog-blogger-browsing.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<script>
    let currentIndex = 0;
const items = document.querySelectorAll('[data-carousel-item]');

// Initially, hide all items except the first one
items.forEach((item, index) => {
    if(index !== currentIndex) {
        item.style.opacity = 0;
    }
});

document.querySelector('[data-carousel-prev]').addEventListener('click', () => {
    items[currentIndex].style.opacity = 0; // Hide current item
    currentIndex = (currentIndex - 1 + items.length) % items.length; // Go to previous item (with wrap around)
    items[currentIndex].style.opacity = 1; // Show new current item
});

document.querySelector('[data-carousel-next]').addEventListener('click', () => {
    items[currentIndex].style.opacity = 0; // Hide current item
    currentIndex = (currentIndex + 1) % items.length; // Go to next item
    items[currentIndex].style.opacity = 1; // Show new current item
});
This is a basic example and doesn't account for slide animations. For smoother transitions, you'd want to use a combination of CSS transitions (which you already have with duration-700 ease-in-out) and JavaScript.

If you're looking for an out-of-the-box solution, there are libraries such as Swiper, Owl Carousel, and Slick which are designed to offer customizable carousels with minimal setup.






</script>


@foreach($post as $data)
<a href="{{ route('postdetail',$data->slug) }}">
<div class="flex items-center justify-center">
<div class="card bg-white text-gray-700 w-72 min-h-[10rem] shadow-lg rounded-md overflow-hidden mx-5 my-5">
    
    <img src="{{ asset('images/'.$data->image) }}"  class="w-full h-40 object-cover">

<h2 class="py-3 font-bold px-3" >
    {{($data->name)}}
</h2>
<h2 class="py-1 px-3 truncate">
    {{($data->content)}}...
</h2>
</div>
</a>
@endforeach


</x-app-layout>
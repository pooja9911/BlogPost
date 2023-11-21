<x-app-layout>
<div class="flex">
<div class="card bg-white text-gray-700 w-full min-h-[10rem] shadow-lg rounded-md overflow-hidden mx-10 my-1">
    
<div class="flex justify-center items-center">
    <img src="{{ asset('images/'.$post->image) }}"  class=" max-w-screen-md h-96 w-5/12 object-cover py-3 ">
</div>
<h2 class="py-3 px-3">
    Name - {{$post->name}}
</h2>
<h2 class="py-1 px-3  font-bold">
    Title - {{$post->title}}
</h2>
<h2 class="py-1 px-3 break-all">
     {{$post->content}}
</h2>
</div>
</x-app-layout>
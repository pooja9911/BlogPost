<x-app-layout>
    <div class="flex">
<div class="card bg-gray-50 text-gray-700 w-10/12 min-h-[10rem] shadow-lg overflow-hidden">
<div class="flex items-center justify-center">
<img class="w-96 h-80 py-4 px-4" src="{{ asset('images/'.$post->image) }}" alt="">
</div>

<h2 class="py-3 font-bold px-3" >
    {{($post->name)}}
</h2>
<h2 class="py-1 px-3 break-all">
    {{($post->content)}}
</h2>
</div>

<div class="card bg-white text-gray-700 w-96 min-h-[10rem] shadow-lg overflow-hidden px-3">
@foreach($data as $list)
<div class="break-all">
    <p><a href="" class="my-5 text-blue-800 underline">{{($list->title)}}</a></p>
</div>
@endforeach
</div>

</div>
</div>

</x-app-layout>
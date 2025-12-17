<x-layout :title="$pagetitle">


@if (session('Success'))
<div class = 'bg-geen-5- px-3 py-2 '>
  {{ session('success') }}
</div>

@endif


  <div class="mt-6 flex items-center justify-end gap-x-6">

    <a href="/blog/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">create</a>
  </div>
</form>

@foreach ($posts as $post )
    <h1 class="text-2xl"> {{ $post -> id }}{{  $post -> title}} </h1>
         <h1 class="text-2xl" >{{ $post->author }}</h1>
    <p>{{ $post -> body }}</p>
 
  
@endforeach

    {{ $posts->links() }}
</x-layout>

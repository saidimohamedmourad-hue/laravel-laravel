<x-layout :title="$pagetitle">

<h2>blog </h2>
@foreach ($posts as $post )
    <h1 class="text-2xl"> {{ $post -> id }}{{  $post -> title}} </h1>
         <h1 class="text-2xl" >{{ $post->author }}</h1>
    <p>{{ $post -> body }}</p>
 
  
@endforeach

    {{ $posts->links() }}
</x-layout>

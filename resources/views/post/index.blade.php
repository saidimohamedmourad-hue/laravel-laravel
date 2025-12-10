<x-layout :title="$pagetitle">

<h2>blog </h2>
@foreach ($posts as $post )
    <h2 class="text-2xl"> {{  $post -> title}} </h2>
    <h2>{{ $post -> body }}</h2>
  
@endforeach

</x-layout>
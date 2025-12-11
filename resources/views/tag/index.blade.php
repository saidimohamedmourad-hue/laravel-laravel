<x-layout :title="$pagetitle">

<h2>tags </h2>
@foreach ($tags as $tag )
    <h2 class="text-2xl"> {{  $tag -> title}} </h2>
    <h2>{{ $tag -> title }}</h2>
  
@endforeach

</x-layout>
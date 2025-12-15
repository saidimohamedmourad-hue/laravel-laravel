<x-layout :title="$pagetitle">

<h2>show comment</h2>


<h2>comment exploring (testin) </h2>

    <h2 class="text-2xl"> {{$comment-> content}} </h2>
    <p><h2>{{ $comment -> author }}</p>
    <a href="/blog/{{ $comment->post->id }}">
    {{  $comment->post->title}}</a> 

    


</x-layout>
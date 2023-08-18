<x-app-layout>
    <x-slot name="header">
        　edit
    </x-slot>
       <h1>Blog Name</h1>
       <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
            <div class="content_title">
               <h2>Title</h2>
               <input type="text" name="post[title]" value="{{$post->title}}">
           </div>
           <div class="body">
               <h2>Body</h2>
               <textarea name="post[body]" >{{$post->body}}</textarea>  
           </div>
           <input type="submit" value="update">
       </form>
       <div class="footer">
           <a href="/posts/{{$post->id}}">戻る</a>
       </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        　index
    </x-slot>
       <h1>Blog name</h1>
       <a href="/posts/create">create</a>
       <div class='posts'>
           @foreach($posts as $post)
               <div class='post'>
                   <br/>
                   <a href="/posts/{{$post->id}}"><h2 class='title'>{{ $post->title}}</h2></a>
                    <a href="/categories/{{ $post -> category->id }}">{{ $post->category->name }}</a>
                   <p class 'body'>{{$post ->body}}</p>
                   <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post">
                       @csrf
                       @method('DELETE')
                       <button type="buttun" onclick="deletePost({{$post->id}})">delete</button>
                   </form>
               </div>
           @endforeach
       </div>
       
        <div>
        @foreach($questions as $question)
            <div>
                <br/>
                <a href="https://teratail.com/questions/{{ $question['id'] }}">
                    {{ $question['title'] }}
                </a>
            </div>
        @endforeach
        </div>
       
       <div class='paginate'>{{$posts->links()}}</div>
       
       
       {{ Auth::user()->name }}
       
       <script>
           function deletePost(id){
               'use scrict'
               
               if(confirm('消去すると復元できません。\n本当に削除しますか？')) {
                   document.getElementById(`form_${id}`).submit();
               }
           }
       </script>
</x-app-layout>
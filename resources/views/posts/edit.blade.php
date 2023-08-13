<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
        <title>Blog</title>

        <!-- Fonts -->
       <!--<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

    </head>
    <body>
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
    </body>
</html>

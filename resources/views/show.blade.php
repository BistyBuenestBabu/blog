@extends('layout')
@section('content')

<div class="container container-flex">
            <main role="main">
           
                <article class="article-featured">
                    <img src="../img/life.jpg" alt="simple white desk on a white wall with a plant on the far right side" class="article-image">
                </article>
               
                <article class="article-recent">
                    <div class="article-recent-main">
                        <h2 class="article-title">{{$data->title}}</h2>
                        <p class="article-body">{{$data->description}}</p>
                       
                    </div>
                    <div class="article-recent-secondary">
                        <img src="../img/food.jpg" alt="two dumplings on a wood plate with chopsticks" class="article-image">
                        <p class="article-info">{{$data->posted_at}}</p>
                    </div>
                    
                </article>
                
            </main><a href="/delete/{{$data->id}}"><button>Delete Post</button></a>
            
            <a href="/edit/{{$data->id}}"><button>Edit Post</button></a>
</div>




@endsection


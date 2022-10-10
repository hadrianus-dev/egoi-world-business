<div>
    <form action="#" class="sidebar__search-form">
        <input type="search" wire:model='searchWords' placeholder="Pesquise Aqui">
        <button type="submit" wire:click.prevent=''><i class="icon-magnifying-glass"></i></button>
    </form><br>
 
    <div class="sidebar__single sidebar__post">
        <h3 class="sidebar__title">Reultados da pesquisa</h3>
        <ul class="sidebar__post-list list-unstyled">
            @if ($searchWords)
            @forelse ($postResults as $post)
            <li>
                <div class="sidebar__post-image">
                    <img src="{{env('MY_PATH'). $post->cover}}" alt="">
                </div>
                <div class="sidebar__post-content">
                    <h3>
                        <span class="sidebar__post-content-meta"><i class="far fa-bookmark"></i> {{$post->category->title}}</span>
                        <a href="news-details.html">{{Str::words($post->title, 3, '...')}}</a>
                    </h3>
                </div>
            </li>
            @empty
            <li>
                <div class="sidebar__post-content">
                    <h3>
                        <a href="#">Sem resultados para sua pesquisa</a>
                    </h3>
                </div>
            </li>
            @endforelse
            @endif

        </ul>
    </div><br>
     
</div>

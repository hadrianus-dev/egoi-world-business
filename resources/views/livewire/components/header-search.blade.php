<div>

    <div class="search-popup" wire:ignore.self>
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">Pesquisa aqui</label><!-- /.sr-only -->
                <input type="text" wire:model='searchWords' id="search" placeholder="Pesquisa por serviços aqui..." />
                <button type="submit" wire:click.prevent='' aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form><br>
            @if ($searchWords)
            <div class="list-group">
                @forelse ($serviceResults as $service)
                <a href="{{route('serviceshow', $service->slug)}}" class="list-group-item list-group-item-action">
                {{$service->title}}
                </a>
                @empty
                <a href="#" class="list-group-item list-group-item-action">Sem resultados para sua pesquisa</a>
                @endforelse
            </div>
            @endif
        </div>
        <!-- /.search-popup__content -->
        
    </div>
    <!-- /.search-popup -->
</div>

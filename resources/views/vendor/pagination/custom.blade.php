@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- previous button url --}}
        @if ($paginator->onFirstPage())
            <li class='page-item disabled'><span class='page-link'></span>previous</li>
        @else
            <li class='page-item'><a class='page-link' href="{{ $paginator->previousPageUrl() }}" rel='previous'>
                previous</a></li>
        @endif

        {{-- pagination number page --}}
         @foreach ( $elements as $element )
            @if (is_string($element))
                <li class='page-item disabled'><span class='page-link'>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if($page == $paginator->currentPage())
                        <li class='page-item active my-active'><span class='page-link'>{{ $page }}</span></li>
                    @else
                        <li class='page-item'><a class='page-link' href=" {{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
                @endif
         @endforeach

         {{-- next button url --}}
         @if ($paginator->hasMorePages())
         <li class='page-item'><a class='page-link' href="{{ $paginator->nextPageUrl() }}" rel='next'>
            next</a></li>

         @else
            <li class='page-item disabled'><span class='page-link'></span>next</li>
         @endif
    </ul>
@endif

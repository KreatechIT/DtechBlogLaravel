@props(['image', 'activePage', 'pageLinks'])


<section id="arck-breadcrumb" class="arck-breadcrumb-section-2 position-relative" data-background="{{ asset($image) }}">
    <div class="container">
        <div class="arck-breadcrumb-content position-relative text-center headline-2 ul-li">
            <h1>{{ $activePage }}</h1>
            <ul>
                @php
                    $i = 0
                @endphp
                @foreach ($pageLinks as $key => $pageLink)
                    <li>
                        @if($i != 0)
                            <span>- &nbsp;&nbsp;</span>
                        @endif

                        @if($i < count($pageLinks) - 1)
                            <a href="{{ route($key) }}"> {{ $pageLink }} </a>
                        @else
                            {{ $pageLink }}
                        @endif
                    </li>
                    @php
                        $i++
                    @endphp
                @endforeach
            </ul>
        </div>
    </div>
</section>




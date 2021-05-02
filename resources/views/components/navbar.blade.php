<!-- Nav -->
<nav class="navbar navbar-expand-sm navbar-light bg-white sticky-top pos-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ asset('') }}">
            <img src="{{ asset('images/ReiwaHouse_logo_final.svg') }}" alt="logo" width="150" height="100"
                class="img-fluid">
        </a>
        <button class="navbar-toggler" id="click-nav" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @foreach ($navbar as $item1)
                    <li class="nav-item ">
                        <a href="{!! asset($item1['url']) !!}"
                            class="nav-text-style nav-padding is-active">{!! $item1['name'] !!}</a>
                        @if (!(empty($dropdown = $navbarModel->getDropdownNavBar($item1['id']))))
                            <ul class="dropdown">
                                @foreach ($dropdown as $item2)
                                    <li><a href="{!! $item2->url !!}"
                                            class="nav-text-style-1">{!! $item2->content !!}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

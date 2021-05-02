@foreach ($result['navbar'] as $item1)
    <li class="nav-item ">
        <a href="{!!$item1['url']!!}" class="nav-text-style nav-padding is-active">{!! $item1['name'] !!}</a>
        @if (!(empty($dropdown = $result['navbarModel']->getDropdownNavBar($item1['id']))))
            <ul class="dropdown">
                @foreach ($dropdown as $item2)
                    <li><a href="{!! $item2->url !!}" class="nav-text-style-1">{!! $item2->content !!}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach

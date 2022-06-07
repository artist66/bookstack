<div class="chapter-child-menu">
    <button chapter-toggle type="button" aria-expanded="{{ $isOpen ? 'true' : 'false' }}"
            class="text-muted @if($isOpen) open @endif">
        @icon('caret-right') <span></span>
    </button>
    <ul class="sub-menu inset-list @if($isOpen) open @endif" @if($isOpen) style="display: block;" @endif role="menu">
        @foreach($bookChild->visible_pages as $childPage)
            <li class="list-item-page {{ $childPage->isA('page') && $childPage->draft ? 'draft' : '' }}" role="presentation">
                @include('entities.list-item-basic', ['entity' => $childPage, 'classes' => $current->matches($childPage)? 'selected' : '' ])
            </li>
        @endforeach
    </ul>
</div>

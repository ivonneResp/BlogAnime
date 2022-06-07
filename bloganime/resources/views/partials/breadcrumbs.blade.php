@unless ($breadcrumbs->isEmpty())
    <!--<ol class="breadcrumb"> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
               <!-- <li class="breadcrumb-item">-->
               <li class="breadcrumb-item" itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                    <!--<a href="{{ $breadcrumb->url }}">-->
                    <a href="{{ $breadcrumb->url }}" itemprop="item">
                <span itemprop="name">
                {{ $breadcrumb->title }}
                </span>
                    </a>
                </li>
            @else
                <li class="breadcrumb-item active">
                    {{ $breadcrumb->title }}
                </li>
            @endif

        @endforeach
        </ol>
    </nav>
    <!--</ol>-->
@endunless

@unless ($breadcrumbs->isEmpty())
    <div class="breadcrumb hide-print">
		<span role="navigation" aria-label="Breadcrumbs">
			<ul class="content">
	            @foreach ($breadcrumbs as $breadcrumb)

	                @if ($loop->last)
	                    @if ($breadcrumb->url)
	                        <li class="active">
	                        	<a href="{{ $breadcrumb->url }}" aria-current="page">{{ $breadcrumb->title }}</a>
	                        </li>
	                    @else
	                        <li class="active">
	                        	<span>
	                        		{{ $breadcrumb->title }}
	                        	</span>
	                        </li>
	                    @endif
	                @else
	                    @if ($breadcrumb->url)
	                        <li>
	                        	<a href="{{ $breadcrumb->url }}">
	                        		{{ $breadcrumb->title }}
	                        	</a>
	                        </li>
	                    @else
	                        <li class="active">
	                        	<span>
	                        		{{ $breadcrumb->title }}
	                        	</span>
	                        </li>
	                    @endif
	                @endif

	            @endforeach
	        </ul>
		</span>
	</div>
@endunless
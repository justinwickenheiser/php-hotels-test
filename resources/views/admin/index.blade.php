<x-hotels::template>
	<h1>Hotels List</h1>

	<p>
		<a href="{{route('hotels.admin.create')}}" class="btn btn-success">
			<span class="icon icon-plus"></span> New Hotel
		</a>
	</p>

	@if($hotels)
		<table class="table">
			<thead>
				<tr>
					<th>Title</th>
					<th>Contract Expiration</th>
					<th>Updated</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($hotels as $hotel)
					<tr>
						<td>{{ $hotel->title }}</td>
						<td>-</td>
						<td>
							{{ date('n/j/Y', strtotime($hotel->updated_at)) }}
						</td>
						<td>
							<a href="{{ route('hotels.admin.edit', $hotel->id) }}" class="btn btn-primary">
								Edit
							</a>
							<form method="POST" style="display: inline-block;" action="{{ route('hotels.admin.destroy', $hotel->id) }}">
								@method('DELETE')
								@csrf
								<button class="btn btn-danger" onClick="return confirm('Are you sure you want to delete this hotel?')">
									Delete
								</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>
			There are no hotels.
		</p>
	@endif
	
</x-hotels::template>
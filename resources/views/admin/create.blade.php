<x-hotels::template>
	<h1>New Hotel</h1>

	<span class="text-required">*</span> indicates a required field

	<form method="post" action="{{ route('hotels.admin.store'); }}">
		@csrf
		<fieldset>
			<legend>Location</legend>
			<p>
				<label for="title">
					<strong>Title <span class="text-required">*</span></strong>
				</label>
				<br />
				<input type="text" name="title" id="title" maxlength="255" size="35" value="{{ old('title') }}" required="true" message="Please enter a title." />
			</p>
			<p>
				<label for="address1">
					<strong>Address 1 <span class="text-required">*</span></strong>
				</label>
				<br />
				<input type="text" name="address1" id="address1" maxlength="255" size="35" value="{{ old('address1') }}" required="true" message="Please enter the hotel's address 1." />
			</p>
			<p>
				<label for="address2">
					<strong>Address 2</strong>
				</label>
				<br />
				<input type="text" name="address2" id="address2" maxlength="255" size="35" value="{{ old('address2') }}" />
			</p>
			<p>
				<label for="city">
					<strong>City <span class="text-required">*</span></strong>
				</label>
				<br />
				<input type="text" name="city" id="city" maxlength="255" size="35" value="{{ old('city') }}" required="true" message="Please enter the hotel's city." />
			</p>
			<p>
				<label for="state">
					<strong>State <span class="text-required">*</span></strong>
				</label>
				<br />
				<input type="text" name="state" id="state" maxlength="255" size="35" value="{{ old('state') }}" required="true" message="Please enter the hotel's state." />
			</p>
			<p>
				<label for="zip">
					<strong>Zip Code <span class="text-required">*</span></strong>
				</label>
				<br />
				<input type="text" name="zip" id="zip" maxlength="255" size="35" value="{{ old('zip') }}" required="true" message="Please enter the hotel's zip code." />
			</p>
		</fieldset>
		<fieldset>
			<legend>GPS Coordinates</legend>
			<p>
				<label for="latitude">
					<strong>Latitude</strong>
				</label>
				<br />
				<input type="text" name="latitude" id="latitude" maxlength="255" size="35" value="{{ old('latitude') }}" />
			</p>
			<p>
				<label for="longitude">
					<strong>Longitude</strong>
				</label>
				<br />
				<input type="text" name="longitude" id="longitude" maxlength="255" size="35" value="{{ old('longitude') }}" />
			</p>
		</fieldset>
		<fieldset>
			<legend>Room/Rate</legend>
			<p>
				<label for="price_min">
					<strong>Price Range - Minimum Rate</strong>
				</label>
				<br />
				<input type="integer" name="price_min" id="price_min" maxlength="255" size="35" value="{{ old('price_min') }}" />
			</p>
			<p>
				<label for="price_max">
					<strong>Price Range - Maximum Rate</strong>
				</label>
				<br />
				<input type="integer" name="price_max" id="price_max" maxlength="255" size="35" value="{{ old('price_max') }}" />
			</p>
		</fieldset>
		<p>
			<input type="submit" value="Submit" />
		</p>
	</form>
</x-hotels::template>
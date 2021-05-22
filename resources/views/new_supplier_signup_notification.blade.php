@component('mail::message')
# From GetSella Retail

{{ ucwords($data['company']) }} contacted GetSella, requesting to Join the GetSella Retail Program.

Kindly Follow up with the following information below.

<table>
	<thead>
		<tr>
			<th>Details</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td width="160px;">Contact Company</td>
			<td>{{ $data['company'] }}</td>
		</tr>

		<tr>
			<td width="160px;">Contact Name</td>
			<td>{{ $data['name'] }}</td>
		</tr>
		
		<tr>
			<td width="160px;">Contact Email</td>
			<td>{{ $data['email'] }}</td>
		</tr>
		<tr>
			<td width="160px;">Contact Mobile</td>
			<td>{{ $data['phone'] }}</td>
		</tr>
		<tr>
			<td width="160px;">Business Category</td>
			<td>
				<ul>
					@foreach($data['business_category'] as $bc)
						<li>{{ $bc }}</li>
					@endforeach
				</ul>
			</td>
		</tr>
		<tr>
			<td width="160px;">About Business</td>
			<td>{{ $data['about_business'] }}</td>
		</tr>
	</tbody>
</table>

@component('mail::button', ['url' => config('app.url')])
GetSella Retail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

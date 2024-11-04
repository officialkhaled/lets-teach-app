@extends('admin.layout')
@section('content')
	
	<main>
		<div class=" mx-auto overflow-x-auto py-4 px-2">
			<table class="table table-lg">
				<thead>
				<tr class="text-lg text-center font-bold bg-blue-500 text-white">
					<th>SL</th>
					<th>Name</th>
					<th>Job</th>
					<th>Favorite Color</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<tr class="hover text-center">
					<td>1</td>
					<td>Cy Ganderton</td>
					<td>Quality Control Specialist</td>
					<td>Blue</td>
					<td class="flex justify-center gap-2">
						<button type="button" class="btn btn-success btn-sm btn-white waves-effect bg-gradient">
							<i class="fas fa-plus-circle"></i> Add
						</button>
						<button type="button" class="btn btn-error btn-sm btn-white waves-effect bg-gradient">
							<i class="fas fa-trash"></i> Delete
						</button>
					</td>
				</tr>
				<tr class="hover text-center">
					<td>2</td>
					<td>Hart Hagerty</td>
					<td>Desktop Support Technician</td>
					<td>Purple</td>
					<td class="flex justify-center gap-2">
						<button type="button" class="btn btn-success btn-sm btn-white waves-effect bg-gradient">
							<i class="fas fa-plus-circle"></i> Add
						</button>
						<button type="button" class="btn btn-error btn-sm btn-white waves-effect bg-gradient">
							<i class="fas fa-trash"></i> Delete
						</button>
					</td>
				</tr>
				<tr class="hover text-center">
					<td>3</td>
					<td>Brice Swyre</td>
					<td>Tax Accountant</td>
					<td>Red</td>
					<td class="flex justify-center gap-2">
						<button type="button" class="btn btn-success btn-sm btn-white waves-effect bg-gradient">
							<i class="fas fa-plus-circle"></i> Add
						</button>
						<button type="button" class="btn btn-error btn-sm btn-white waves-effect bg-gradient">
							<i class="fas fa-trash"></i> Delete
						</button>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</main>

@endsection
@extends('layouts.app')

@section('page_title', 'Role')

@section('content')
	<x-breadcrumb :links="$breadcrumb" size="lg"/>
	<x-code-base-block title="Role" class="block-content-full">

		@can('access', 'roles.create')
			<div class="text-right">
				<a href="{{ route('roles.create') }}" class="btn btn-alt-primary">Buat Role</a>
			</div>
			<hr>
		@endcan

		@if (session('success'))
			<x-alert type="success">
				{{ session('success') }}
			</x-alert>
		@endif

		@if (session('danger'))
			<x-alert type="danger">
				{{ session('danger') }}
			</x-alert>
		@endif

		@if ($roles)
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover font-w600" id="rolesIndex">
					<thead class="thead-light">
						<tr>
							<th class="w-50">Nama Role</th>
							<th class="w-50">Menu</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($roles as $role)
							<tr>
								<td>{{ $role->name }}</td>
								<td class="text-right">

									@can('access', 'roles.edit')
										<a href="{{ route('roles.edit', ['role' => $role]) }}" class="btn btn-alt-primary btn-sm">Edit</a>
									@endcan

									@can('access', 'roles.accesses')
										<a href="{{ route('roles.accesses', ['role' => $role]) }}" class="btn btn-alt-primary btn-sm">Akses</a>
									@endcan

									@can('access', 'roles.destroy')
										@if ($role->id == 1 || $role->id == 2 || $role->id == 3)
											<button class="btn btn-alt-danger btn-sm" disabled>Hapus</button>
										@else
											<button class="btn btn-alt-danger btn-sm" data-role-id="{{ $role->id }}" data-role-name="{{ $role->name }}" data-action="{{ route('roles.destroy', ['role' => $role]) }}">Hapus</button>
										@endif
									@endcan
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		@endif

	</x-code-base-block>

	@can('access', 'roles.destroy')
		<x-modal id="deleteRole" title="Hapus Role">
			<x-code-base-submodal-content id="deleteRole" title="Hapus Role">
				<p>Hapus <b><span id="roleName"></span></b>?</p>
			</x-code-base-submodal-content>
			<x-code-base-submodal-footer>
				<form method="POST" action="#" id="formDeleteRole">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-alt-danger">Hapus</button>
				</form>
			</x-code-base-submodal-footer>
		</x-modal>
	@endcan
@endsection

@push('styles')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#rolesIndex").DataTable({
				"columnDefs" : [
					{ "targets" : -1, "orderable" : false, "searchable" : false }
				]
			});
			$("[data-role-id]").click(function () {
				var deleteRoleButton = $(this);

				$("#roleName").text(deleteRoleButton.data("roleName"));
				$("#formDeleteRole").attr("action", deleteRoleButton.data("action"));

				$("#deleteRole").modal("show");
			});
		});
	</script>
@endpush

@csrf
<x-form-group-text label="Nama Role" name="name" id="fieldName" :value="$role ? $role->name : old('name')" :message="$errors->first('name')"/>
<div class="form-group">
	<button class="btn btn-alt-primary">Simpan</button>
</div>
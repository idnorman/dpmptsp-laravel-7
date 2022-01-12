<div class="form-group" id="{{ $field }}">
	    <label for="{{ $field }}">{{ $label }}</label>
	    <input type="file" class="form-control-file" id="{{ $field }}" name="{{ $field }}">

	    <small class="font-italic">{{ $ratio ?? ''}}</small><br>
	    <span>{{ $old ?? '' }}</span>
	    @error($field)
		    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
</div>
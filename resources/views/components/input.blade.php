	  <div class="form-group">
	    <label for="{{$field ?? ''}}">{{$label}}</label>
	    <input type="{{$type ?? ''}}" class="form-control" id="{{$field ?? ''}}" name="{{$field ?? ''}}" placeholder="{{$placeholder ?? ''}}"
 

	    @if(!empty($note))
	    	value="{{$note}}" 
	    @elseif(isset($value))
	    	value="{{old($field) ? old($field) : $value}}"
	    @else
	    	value="{{old($field)}}"
	    @endif

	    
	    

	    >
	    @error($field)
		    <div class="alert alert-danger">{{ $message }}</div>
		@enderror
	  </div>
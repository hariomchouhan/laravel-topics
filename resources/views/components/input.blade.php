<div class="form-group my-4">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}" class="form-control" value="{{$meri}}">
    <span class="text-danger">
        <!-- @error('name')
            {{$message}}
        @enderror -->
    </span>
</div>
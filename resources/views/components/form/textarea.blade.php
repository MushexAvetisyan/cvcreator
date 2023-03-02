@props(['name','value'=>null])

<div class="form-group">
  <label for="{{$name}}">Summary</label>
<textarea class="form__field" name="{{$name}}" id="{{$name}}" cols="30" rows="5">{{$value}}</textarea>
</div>

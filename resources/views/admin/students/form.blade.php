<div class="form-group {{ $errors->has('Id') ? 'has-error' : '' }}">
    <label for="Id" class="control-label">{{ 'Id' }}</label>
    <input class="form-control" name="Id" type="text" id="Id"
        value="{{ isset($student->Id) ? $student->Id : '' }}">
    {!! $errors->first('Id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name"
        value="{{ isset($student->name) ? $student->name : '' }}">
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image"
        value="{{ isset($student->image) ? $student->image : '' }}">
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('age') ? 'has-error' : '' }}">
    <label for="age" class="control-label">{{ 'Age' }}</label>
    <input class="form-control" name="age" type="text" id="age"
        value="{{ isset($student->age) ? $student->age : '' }}">
    {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

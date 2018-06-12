@extends('layout')

@section('content')
<form>
    <div class="form-group form-check">
        <input type="text" placeholder= "Enter your todo here">
    </div>
    <button type="submit" class="btn btn-primary">Create Todo</button>
</form>
@endsection
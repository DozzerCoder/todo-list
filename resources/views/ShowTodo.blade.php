@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method = "post">
                {{csrf_field()}}
                <input type="text" class="form-control input-lg" name = "todos" placeholder="Enter your todo here">
                <button class="btn btn-primary" type = "submit">Create todo</button>
            </form>
        </div>
    </div>
    <?php foreach ($todos as $todo):?>
    <?php echo $todo->todo;?>
    <br>
    <?php endforeach;?>

@stop 
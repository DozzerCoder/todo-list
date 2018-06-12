@extends('layout')

@section('content')
    <?php foreach ($todos as $todo):?>
    <?php echo $todo->todo;?>
    <br>
    <?php endforeach;?>

@stop 
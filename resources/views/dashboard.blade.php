@extends('layouts.main')

@section('content')

<div id="temps_div"></div>
<?= $lava->render('LineChart', 'Temps', 'temps_div') ?>
@stop
               

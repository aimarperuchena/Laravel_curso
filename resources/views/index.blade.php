@extends('layout')

@section('content')
@if (count($post)>0)
<h4>Listado de posts</h4>
<ul>

@foreach($post as $p)
<li>{{$p->title}}</li>
@endforeach
</ul>
@endif

<?php $i=0; ?>
@while($i < 3)
    {{ $i++}}
@endwhile
@endsection

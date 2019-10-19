<h1>Curso openwevinars</h1>

@if (count($post)>0)
<h4>Listado de posts</h4>
<ul>

@foreach($post as $p)
<li>{{$p->title}}</li>
@endforeach
</ul>
@endif

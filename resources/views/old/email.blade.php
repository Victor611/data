<!DOCTYPE html>
<html>
<head></head>
<body style="background: #f5f5f5; color: #497CB1">
<div><h1><a href="c8d/">C8Data</a></h1>
    </div>
</header>
<h2>{{$title}}</h2>
@foreach($subj as $k=> $v)
    <p>{{$k}}: {{$v}}</p>
@endforeach
</body>
</html>
<html>
<head>
</head>
<body>
    <h1>Biodata</h1>
<br>
<p>Nama : {{$nama}}</p>

<p>Pelajaran :</p>
<ul>
    @foreach($pelajaran as $a)
    <li>{{$a}}</li>
    @endforeach

</ul>
</body>
</html>

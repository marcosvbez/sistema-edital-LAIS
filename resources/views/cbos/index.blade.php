<!DOCTYPE html>

<html>
<head>
    <title>

    </title>

</head>
<body>
    <h1>CBO</h1>

@foreach($cbos as $cbo)
    <li> {{$cbo->id}}</li>
@endforeach
</body>
</html>
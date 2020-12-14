<!DOCTYPE html>
<html>
<head>
<title>Laravel Test Page</title>
</head>
<body>

<h1>Laravel Test</h1>
Id no : {{$id}}
Name : {{$name}}
<?php
    for ($i=0;$i<15;$i++)
        echo "<br>$i: $name";
echo "$id<br>";
echo "$name";
?>
<a href="{{route("home")}}">Ana Sayfa </a>

</body>
</html>

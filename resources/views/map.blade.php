<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<script src="{{asset('js/p5.js')}}"></script>

<script>
    var img;
var img2;
function preload() {
    img = loadImage('{{ asset('img/icon.png')}}');
    img2 = loadImage('{{ asset('img/ajk_baru.png')}}');
}
function setup() {
//   background(50);
// Top-left corner of the img is at (10, 10)
// Width and height are 50 x 50
createCanvas(220, 220);
}

function draw(){
    background(img2);
    @foreach($all_coordinates as $coord)
        image(img, {{ $coord->x * 20 }}, {{ $coord->y * 20 }}, 50, 50);
    @endforeach
}
</script>
</head>
<body>
{{-- 	<p>user_id = {{$user_id}}</p>
	<p>x = {{$x}} y = {{$y}}</p> --}}
</body>
</html>

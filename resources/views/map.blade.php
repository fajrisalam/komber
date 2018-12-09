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
    img2 = loadImage('{{ asset('img/ajk.png')}}');
}
function setup() {
//   background(50);
// Top-left corner of the img is at (10, 10)
// Width and height are 50 x 50
createCanvas(1100, 1100);
}

function draw(){
    background(img2);
    image(img, {{ $x * 100 }}, {{ $y * 100 }}, 50, 50);
}
</script>
</head>
<body>

</body>
</html>

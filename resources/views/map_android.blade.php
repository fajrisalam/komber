<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final Project Komber</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="{{asset('js/p5.js')}}"></script>

    <script>
        var img;
        var img_bg;
        var font;
        var fontsize = 20;
        var icon_size = 50;
        var satuan = 20;
        function preload() {
            img_bg = loadImage('{{ asset('img/ajk_baru.png')}}');
            var img1 = loadImage('{{ asset('img/icon.png')}}');
            var img2 = loadImage('{{ asset('img/icon2.png')}}');
            var img3 = loadImage('{{ asset('img/icon3.png')}}');
            var img4 = loadImage('{{ asset('img/icon4.png')}}');
            var img5 = loadImage('{{ asset('img/icon5.png')}}');
            img = [ img1, img2, img3, img4, img5];
            font = loadFont('{{ asset('font/Asimov.otf')}}');
        }

        function setup() {
            var c = createCanvas(11 * satuan, 11 * satuan);
            c.parent('#gambar');
            textFont(font);
            textSize(fontsize);
            textAlign(CENTER, CENTER);
        }

        function draw() {
            background(img_bg);
            @foreach($all_coordinates as $key => $coord)
                image(img[{{$key}}], {{ $coord->x }} * satuan, {{ $coord->y }} * satuan, icon_size, icon_size);
                // fill(65);
                // text("{{$coord->user_id}}", {{$coord->x}} * satuan + icon_size/2, {{$coord->y}} * satuan + icon_size/2);
            @endforeach
        }
    </script>
</head>
<body>
    <div id="gambar"></div>
    <div style="width: 400px;">
        <div class="col-md-12">
            @foreach($all_coordinates as $key => $coord)
                <div class="d-flex flex-row">
                    <div class="col-md-4">
                        <img src="{{ asset($image_path[$key])}}" width="60%">
                    </div>
                    <div class="col-md-8">
                        {{$coord->user_id}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>

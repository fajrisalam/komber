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
        var fontsize = 40;
        var icon_size = 150;
        var satuan = 55;
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
    <div class="row">
        <div id="gambar" class="col-md-6"></div>
        <div class="col-md-6">
            @foreach($all_coordinates as $key => $coord)
                <div class="d-flex flex-row">
                    <div class="col-md-1">
                        <img src="{{ asset($image_path[$key])}}" width="100%">
                    </div>
                    <div class="col-md-2">
                        {{$coord->user_id}}
                    </div>
                    <div class="col-md-2">
                        x = {{$coord->x}}
                    </div>
                    <div class="col-md-2">
                        y = {{$coord->y}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>

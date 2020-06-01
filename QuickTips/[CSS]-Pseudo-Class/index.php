<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPS :TARGET</title>
    <style>
    /* pemanggilan dengan ID akan membuat proses load agak berat
    /* ID
        #judul:target {
            background: salmon;
        }
        #p1:target {
            background: blue;
        }
        #p2:target {
            background: red;
        }
        #p3:target {
            background: black;
            color: white;
        }
----------------------------------
    /* CLASS */
        .judul:target {
            background: salmon;
        }
        .p1:target {
            background: blue;
        }
        .p2:target {
            background: red;
        }
        .p3:target {
            background: black;
            color: white;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="#judul">Judul</a></li>
        <li><a href="#p1">Paragraf 1</a></li>
        <li><a href="#p2">Paragraf 2</a></li>
        <li><a href="#p3">Paragraf 3</a></li>
    </ul>
    <h1 id="judul" class="judul">QuickTip #1 : CSS Pseudo-Class :target</h1>
    <p id="p1" class="p1">Paragraf 1</p>
    <p id="p2" class="p2">Paragraf 2</p>
    <p id="p3" class="p3">Paragraf 3</p>
</body>
</html>
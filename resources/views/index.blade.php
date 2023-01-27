<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-jquery-cdn/>
    <x-bootstrap-links/>
    <x-style/>
    <title>Comics</title>
</head>
<body class="bg-dark">
    <x-navigation :active="$active"/>
    <x-header/>
    <x-comis-section :comics="$comics"/>
    <div class="container">
        <div class="py-3">
            {{$comics->links()}}
        </div>
    </div>
    <x-toast/>
</body>
</html>
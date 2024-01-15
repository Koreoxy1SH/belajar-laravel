<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <style>
        .box {
            padding: 5px;
            border-bottom: 1px solid lightgrey
        }
    </style>
</head>
<body>
    <h1>Hello Blog Coder</h1>
    
    <div>
        @php($number = 1)

        @foreach($posts as $post)
        <div class='box'>
            <h2>{{ $post[0] }} <small>#{{ $number }}</small></h2>
            <p>{{ $post[1] }}</p>
        </div>

            @php($number++)
        @endforeach
    </div>

</body>
</html>
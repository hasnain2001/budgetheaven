<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>List of Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <video width="320" height="240" controls>
                    <source src="{{ $post->video }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="{{ $post->image }}" alt="Post Image">
            </li>
        @endforeach
    </ul>
</body>
</html>

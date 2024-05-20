<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>topページ</title>
</head>
<body>
  ここはトップページです
  <div>
    name : {{$name}}
  </div>
  <div>
    day :{{$day}}
  </div>
  <div>
    msg : {{$msg}}
  </div>
  <form action="/top" method="post">
  @csrf
    <div><input type="text" name="msg"></div>
    <div><input type="submit" value="送信"></div>
  </form>
</body>
</html>
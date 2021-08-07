<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Hello</title>
</head>
<body>
<h1>POST通信してみる（フォーム）</h1>
 
<form action="{{ url('/hello/result')}}" method="POST">
    {{ csrf_field() }}
    <div><textarea rows="6" name="message"></textarea></div>
    <div><input type="submit" name="add"></div>
</form>

</body>
</html>

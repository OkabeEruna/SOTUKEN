<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>印刷完了画面</title>
</head>
<body>
<h1>印刷が完了しました。</h1>
<form  action="{{action('vaccineTableController@finishStock')}}" method="POST">
  @csrf
  <input type="submit" name="back" value="確認">
</form>
</body>
</html>
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
</header>

<main>
<h2>Practice</h2>

<p>次のフォームに必要事項をご記入ください</p>
<form action="" method="post" enctype="multipart/form-data">
    <dl>
        <dt>ニックネーム<span class="requires">必須</span></dt>
        <dd><input type="text" name="name" size="35" maxlength="255"></dd>
        <dt>メールアドレス<span class="requires">必須</span></dt>
        <dd><input type="text" name="email" size="35" maxlength="255"></dd>
        <dt>パスワード<span class="requires">必須</span></dt>
        <dd><input type="password" name="password" size="10" maxlength="20"></dd>
        <dt>写真など</dt>
        <dd><input type="file" name="image" size="35"></dd>
    </dl>
    <div><input type="submit" value="入力内容を確認する"></div>
</form>

</main>
</body>
</html>

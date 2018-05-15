<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <script src="src/jQuery.js"></script>
    <script src="src/sigin.js"></script>
    <script src="src/regist.js"></script>
    <title>WikiKit</title>
</head>
<body>
    <div id="debg"></div>
    <div id="main">
        <header>
            <ul>
                <li><a href="index.php">ログイン</a></li>
            </ul>
            <div class="clear"></div>
        </header>
        <div id="content">
            <div id="inner">
                <div class="items">
                    <h2 class="i_h2">WikiKit</h2>
                    <div class="description">
                        簡単にWikiを投稿するサイト。<br>
                        APIの説明書、ゲームの攻略、だいたいセーフ。<br>
                        WikiKitをようこそ。
                    </div>
                </div>
                <div class="items">
                    <input type="text" name="i_userid" class="textbox fstText" placeholder="ユーザ名">
                    <input type="password" name="i_userpass" class="textbox" placeholder="パスワード">
                    <div class="error"></div>
                    <input type="button" value="ログイン" class="button none" id="login">
                    <input type="button" value="新規登録" class="button active" id="regist">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
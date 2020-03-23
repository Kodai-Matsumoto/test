<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog-掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
        <img src="4eachblog_logo.jpg">
        <header>
            <div class="header">  
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>  
        </header>
        
        <main>
            <div class="main>">
                <div class="left">
                    <h1 class="left_title">プログラミングに役立つ掲示板</h1>
                    <form method="post" action="insert.php">
    
                        <div>
                            <h3>入力フォーム</h3>
                            
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="70" name="handlename">
                        </div>
        
                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="70" name="title">
                        </div>
                        
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="100" rows="10" name="comments"></textarea>
                        </div>
        
                        <div>
                            <form action="insert.php" method="post">
                                <input type="submit" class="submit" value="投稿する">                  
                                <input type="hidden" value="<?php echo $_POST['handlename']; ?>" name="handlename">
                                <input type="hidden" value="<?php echo $_POST['title']; ?>" name="title">
                                <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                            </form>
                        </div>
                    </form>
                    
                    <div class="box1">
                        <h4 class="title">タイトル</h4>
                        <h6 class="comments">あああああああ</h6>
                        <p class="handlename">aaa</p>
                    </div>

                    <div class="box2">
                        <h4 class="title">タイトル</h4>
                        <h6 class="comments">あああああああ</h6>
                        <p class="handlename">aaa</p>
                    </div>
                    
                </div>
            
                <div class="right">
                    <div class="sub">
                        <div class="sub0">
                            <h2>人気の記事</h2>
                            <ul>PHPオススメ本</ul>
                            <ul>PHP MyAdminの使い方</ul>
                            <ul>今人気のエディタ Top5</ul>
                            <ul>HTMLの基礎</ul>
                        </div>
                    
                        <div class="sub0">
                            <h2>オススメリンク</h2>
                            <ul>XAMMPのダウンロード</ul>
                            <ul>Eclipseのダウンロード</ul>
                            <ul>Bracketsのダウンロード</ul>
                            <ul>HTMLの基礎</ul>
                        </div>
                    
                        <div class="sub0">
                            <h2>カテゴリ</h2>
                            <ul>HTML</ul>
                            <ul>CSS</ul>
                            <ul>MySQL</ul>
                            <ul>JavaScript</ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
    
        
        <footer>
        
        copyright(c) internous / 4each blog the which provides A to Z about programing.
        
        </footer>
    
</body>
    
</html>
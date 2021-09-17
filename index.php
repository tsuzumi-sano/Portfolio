<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="佐野鼓の自己紹介">
    <title>PORTFOLIO</title>
    <link rel="stylesheet" href="./common/style.css">
</head>
<body>
    <!-- ヘッダー -->
    <?php include_once('./common/header.html'); ?>

    <!-- メイン -->
    <div class="main" id="home">
        <!-- メインイメージ -->
        <div class="mainImage-container" >
            <div class="main-name">
                <h1>TSUZUMI<br>SANO</h1>
                <h2>佐野 鼓<br>WEB CREATOR</h3>
            </div>
            <div class="img"><img src="img/Me.PNG" alt="プロフィール画像"></div>
        </div>     
        <div class="red-box"></div>   

        <!-- HOME Projects -->
        <div class="home-projects">
            <div class="projects projects-container">
                <h2 class="sub-title" >PROJECTS</h2>
                <p class="subtitle-design">•••••••<img src="img/矢印.svg" alt="">•••••••</p>
                <div class="projects-list">
                    <div class="project">
                        <div class="img-box">
                            <img src="img/twitter_clone.png" alt="Twitterクローン">
                        </div>
                        <div class="text-area">
                            <h3>Twitterクローン</h3>
                            <img src="img/line.png" alt="装飾">
                            <p class="description">Twitterの複製アプリです。ツイートを投稿できます。<br>PHP / さくらVPSを利用しています。</p>
                        </div>
                    </div>
                    <div class="project">
                        <div class="img-box">
                            <img src="img/twitter_clone.png" alt="Twitterクローン">
                        </div>
                        <div class="text-area">
                            <h3>ひとこと掲示板</h3>
                            <img src="img/line.png" alt="装飾">
                            <p class="description">シンプルな掲示板です。<br>PHP / MySQLを利用しています。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="projects.php" class="link-btn">詳しく見る</a>
            </div>
        </div>
    </div>

    <!-- フッター -->
    <?php include_once('./common/footer.html'); ?>

</body>
</html>
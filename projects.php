<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="佐野鼓の自己紹介">
    <title>PROJECTS - PORTFOLIO</title>
    <link rel="stylesheet" href="./common/style.css">
</head>

<body>
    <!-- ヘッダー -->
    <?php include_once('./common/header.html'); ?>

    <!-- projects -->
        <!-- Projects -->
        <div class="projects projects-page">
            <div class="projects-container">
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
                            <p class="description">Twitterの複製アプリです。ツイートを投稿できます。<br>PHP / MySQLを利用しています。</p>
                            <p class="description-account">テストアカウント</p>
                            <b>Email：test0001@example.com<br>Pass：test0001</b>
                            <div class="link-btn">
                                <a href="https://test-twitterclone-ts.com/TwitterClone">Website</a>
                                <a href="">GitHub</a>
                            </div>
                        </div>
                    </div>
                    <div class="project">
                        <div class="img-box">
                            <img src="img/twitter_clone.png" alt="Twitterクローン">
                        </div>
                        <div class="text-area">
                            <h3>ひとこと掲示板</h3>
                            <img src="img/line.png" alt="装飾">
                            <p class="description">シンプルな掲示板です。管理アカウントでログインすると、投稿の削除が可能です。<br>PHP / MySQLを利用しています。</p>
                            <p class="description-account">管理アカウント</p>
                            <b>Email：test@gmail.com<br>Pass：test123</b>
                            <div class="link-btn">
                                <a href="">Website</a>
                                <a href="">GitHub</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    
    <!-- フッター -->
    <?php include_once('./common/footer.html'); ?>
</body>
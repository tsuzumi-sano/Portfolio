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
                            <p class="description">
                                Twitterの複製アプリです。ツイートを投稿できます。<br>
                                MVCモデルでの制作、アカウント作成、画像のアップロード機能などの習得のため制作しました。<br><br>
                                使用言語、ツールなど<br>
                                HTML / CSS / PHP / JavaScript / MySQL / Bootstrap / さくらVPS / GitHub / VScode / MySQL Workbench<br><br>
                                テストアカウント<br>
                                Email：test0001@example.com<br>
                                Pass：test0001

                            </p>
                            <div class="link-btn">
                                <a href="https://test-twitterclone-ts.com/TwitterClone" target="_blank">Website</a>
                            </div>
                        </div>
                    </div>
                    <div class="project">
                        <div class="img-box">
                            <img src="img/ひとこと掲示板.png" alt="ひとこと掲示板">
                        </div>
                        <div class="text-area">
                            <h3>ひとこと掲示板</h3>
                            <img src="img/line.png" alt="装飾">
                            <p class="description">
                                シンプルな掲示板です。<br>
                                管理画面から、CSVのダウンロードや投稿の編集・削除が可能です。<br>
                                基本的なデータベース操作、セッション機能やバリデーション機能の実装を習得するため制作しました。<br><br>
                                使用言語、ツールなど<br>
                                HTML / CSS / PHP / JavaScript / MySQL / さくらVPS / GitHub / VScode / MySQL Workbench<br><br>
                                管理画面パスワード：adminPassword
                            </p>
                            
                            <div class="link-btn">
                                <a href="https://simple-bbs-ts.net/BBS/base.php" target="_blank">Website</a>
                                <a href="https://simple-bbs-ts.net/BBS/admin.php" target="_blank">管理画面</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    
    <!-- フッター -->
    <?php include_once('./common/footer.html'); ?>
</body>
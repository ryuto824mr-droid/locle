<?php
// まだ送信処理は書かない（表示確認用）
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お問い合わせ｜株式会社LOCLE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
  <div class="header-inner">
    <a href="index.html">
      <img src="img/locle-logo.png" alt="株式会社LOCLE ロゴ">
    </a>
  </div>
</header>

<section class="contact" style="padding-top:160px;">
  <h2>お問い合わせ</h2>

  <div class="contact-wrapper">
    <p class="contact-lead">
      下記フォームに必要事項をご入力のうえ、送信してください。
    </p>

    <form class="contact-form">
      <div class="form-item">
        <label>貴社名 <span class="required">必須</span></label>
        <input type="text">
      </div>

      <div class="form-item">
        <label>業種 <span class="required">必須</span></label>
        <input type="text">
      </div>

      <div class="form-item">
        <label>担当者名 <span class="required">必須</span></label>
        <input type="text">
      </div>

      <div class="form-item">
        <label>電話番号 <span class="required">必須</span></label>
        <input type="tel">
      </div>

      <div class="form-item">
        <label>メールアドレス <span class="required">必須</span></label>
        <input type="email">
      </div>

      <div class="form-item">
        <label>ご相談・ご質問内容 <span class="optional">任意</span></label>
        <textarea rows="5"></textarea>
      </div>

      <button class="btn submit-btn" type="submit">送信する</button>
    </form>
  </div>
</section>

</body>
</html>

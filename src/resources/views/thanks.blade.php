<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>確認テスト</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
  <div class="thanks__content">
    <div class="thanks__background">
      <h1 class="thanks__background-title">Thank you</h1>
      <div class="thanks__text">
        <div class="thanks__heading">
          <h2 class="thanks__heading-text">お問い合わせありがとうございました</h2>
        </div>
        <div class="form__button">
          <button value="/index" type="submit" class="form__button-submit">HOME</button>
        </div>
      </div>
    </div>
  </div>
</body>
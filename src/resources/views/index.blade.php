@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2 class="contact-form__heading-title">Contact</h2>
  </div>

  <form class="form" action="/contacts/confirm" method="post">
    @csrf
    <div class="form__content">
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お名前</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__group-content__wrap">
            <div class="form__input--text">
              <input type="text" name="last-name"  class="input--name" placeholder="例:山田" value="{{ old('last-name') }}" />
            </div>
            <div class="form__error">
              @error('last-name')
              {{ $message }}
              @enderror
            </div>
            <div class="form__input--text name">
              <input type="text" name="first-name" class="input--name" placeholder="例:太郎" value="{{ old('first-name') }}" />
            </div>
            <div class="form__error">
              @error('first-name')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">性別</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__group-content__wrap checkbox">
            <div class="form__input--checkbox">
              <input type="radio" name="gender" id="man" class="input--checkbox" value="男性" />
              <label for="man">男性</label>
            </div>
            <div class="form__input--checkbox">
              <input type="radio" name="gender" id="woman" class="input--checkbox" value="女性" />
              <label for="woman">女性</label>
            </div>
            <div class="form__input--checkbox">
              <input type="radio" name="gender" id="other" class="input--checkbox" value="その他" />
              <label for="other">その他</label>
            </div>
          </div>
          <div class="form__error">
            @error('gender')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--box">
            <input type="email" name="email" class="input--email" placeholder="例:test@example.com" value="{{ old('email') }}" />
          </div>
          <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">電話番号</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__group-content__wrap">
            <div class="form__input--number">
              <input type="tel" name="tel-top" class="input--number" placeholder="080" value="{{ old('tel-top') }}" />
            </div>
            <div class="form__input--number number__border">
              <input type="tel" name="tel-center" class="input--number input--number__border" placeholder="1234" value="{{ old('tel-center') }}" />
            </div>
            <div class="form__input--number">
              <input type="tel" name="tel-end" class="input--number" placeholder="5678" value="{{ old('tel-end') }}" />
            </div>
            <div class="form__error">
            @error('tel-top', 'tel-center', 'tel-end')
            {{ $message }}
            @enderror
          </div>
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">住所</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--box">
            <input type="text" name="address" class="input--address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
          </div>
          <div class="form__error">
            @error('address')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">建物名</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--box">
            <input type="text" name="building" class="input--building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お問い合わせの種類</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <select class="form__group-content__select" id="detail" name="detail" value="{{ old('detail') }}">
              <option value="sample">選択してください</option>
              <option value="商品のお届けについて">商品のお届けについて</option>
              <option value="商品の交換について">商品の交換について</option>
              <option value="商品トラブル">商品トラブル</option>
              <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
              <option value="その他">その他</option>
          </select>
          <div class="form__error">
            @error('select')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>

      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お問い合わせ内容</span>
          <span class="form__label--required">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--textarea">
            <textarea name="content" id="" cols="78" rows="8" class="input--textarea" placeholder="お問い合わせ内容をご記載ください"></textarea>
          </div>
          <div class="form__error">
            @error('content')
            {{ $message }}
            @enderror
          </div>
        </div>
      </div>
    </div>

    <div class="form__button">
      <button class="form__button-submit" type="submit">確認画面</button>
    </div>

  </form>
</div>
@endsection
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h2 class="confirm-form__heading-title">Confirm</h2>
  </div>

  <form class="form" action="/contacts" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="confirm-table__text">
            <div class="table__name--wrap">
              <div class="last-name">
                <input type="text" name="last-name" value="{{ $contact['last-name'] }}" readonly />
              </div>
              <div class="first-name">
                <input type="text" name="first-name" value="{{ $contact['first-name'] }}" readonly />
              </div>
            </div>
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header">性別</th>
          <td class="confirm-table__text">
            <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header">メールアドレス</th>
          <td class="confirm-table__text">
            <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header">電話番号</th>
          <td class="confirm-table__text">
            <div class="table__tel-wrap">
            <input class="tel" type="text" name="tel" value="{{ $tel['tel-top'] }}{{ $tel['tel-center'] }}{{ $tel['tel-end'] }}" readonly />
            </div>
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header">住所</th>
          <td class="confirm-table__text">
            <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header">建物名</th>
          <td class="confirm-table__text">
            <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせの種類</th>
          <td class="confirm-table__text">
            <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
          </td>
        </tr>

        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせ内容</th>
          <td class="confirm-table__text">
            <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
          </td>
        </tr>

      </table>
    </div>

    <div class="button-wrap">
      <div class="form__button">
        <button class="form__button-submit" type="submit">送信</button>
      </div>
      <div class="form__correction">
        <a href="/" class="form__correction-link">修正</a>
      </div>
    </div>

  </form>
</div>
@endsection
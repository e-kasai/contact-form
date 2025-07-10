@extends('layouts.app')
@section('css')
    {{-- asset内を読み込みたいCSSファイルパスに変更 ex index.cssなど --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
    <section class="wrapper">
        <div class="container">
            <div class="content">
                {{-- CONTACT FORM --}}
                <section class="contact-form">
                    <div class="container">
                        <div class="content">
                            <div class="contact-form__container">
                                {{--  フォームのヘッダー  --}}
                                <div class="contact-form__header">
                                    <h2>お問い合わせ</h2>
                                </div>
                                <form class="contact-form__form" method="post" action="/contacts/confirm" novalidate>
                                    @csrf
                                    {{-- 名前のフォーム --}}
                                    <div class= "contact-form__row">
                                        <label for="name">お名前<span class="required">必須</span></label>
                                        <div class="contact-form__input">
                                            <input type="text" name="name" id="name" placeholder="テスト太郎"
                                                value="{{ old('name') }}" required />
                                            <div class="error-message">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- メールアドレスのフォーム --}}
                                    <div class= "contact-form__row">
                                        <label for="email">メールアドレス<span class="required">必須</span></label>
                                        <div class="contact-form__input">
                                            <input type="email" name="email" id="email"
                                                placeholder="abcdefg@gmail.com" value="{{ old('email') }}" required />
                                            <div class="error-message">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 電話番号のフォーム --}}
                                    <div class= "contact-form__row">
                                        <label for="tel">お電話番号<span class="required">必須</span></label>
                                        <div class="contact-form__input">
                                            <input type="tel" name="tel" id="tel" placeholder="09012345678"
                                                value="{{ old('tel') }}" required />
                                            <div class="error-message">
                                                @error('tel')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- 問い合わせ内容のフォーム --}}
                                    <div class= "contact-form__row">
                                        <label for="message">お問い合わせ内容<span class="required">必須</span></label>
                                        <div class="contact-form__input">
                                            <textarea name="message" id="message" cols="30" rows="8">{{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="contact-form__button">
                                        <button class="contact-form__button-submit" type="submit">送信</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection

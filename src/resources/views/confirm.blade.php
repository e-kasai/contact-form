@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
    <section class="wrapper">
        <div class="container">
            <div class="content">
                <section class="contact-table">
                    <div class="container">
                        <div class="content">
                            <div class="contact-table__header">お問い合わせ内容確認</div>
                            <form action="/contacts" method="POST" novalidate>
                                <table class="contact-table__table" border="1">
                                    @csrf
                                    <tr>
                                        <th>お名前</th>
                                        <td>
                                            <input type="text" name="name" value="{{ $user_item['name'] }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>メールアドレス</th>
                                        <td>
                                            <input type="email" name="email" value="{{ $user_item['email'] }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td>
                                            <input type="tel" name="tel" value="{{ $user_item['tel'] }}" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>お問い合わせ内容</th>
                                        <td>
                                            <textarea name="message" cols="30" rows="8">{{ $user_item['message'] }}</textarea>
                                        </td>
                                    </tr>
                                </table>
                                <div class="contact-table__button">
                                    <button class="contact-table__button-submit" type="submit">送信</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                </table>
            </div>
        </div>
    </section>
@endsection

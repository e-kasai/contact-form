<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/Practice/お問い合わせフォーム中央寄せ.css')}}">
</head>
<body>
    <main>
        <div class="form-heading"><h2>お問い合わせ</h2></div>
        <div class="form-container">
            <form action="" method="">
                <div class="form-group">
                    <label for="name">お名前<span class="required">必須</span></label>
                    <input type="text" id="name" name="user_name" required>
                </div>
                <!--バリデーションエラーは .form-group の外に置くとレイアウトが崩れない-->
                @error('name')<div class="form-error">{{$message}}</div>@enderror
                <div class="form-group">
                    <label for="tel">電話番号<span class="required">必須</span></label>
                    <input type="tel" id="tel" name="user_tel" required>
                </div>
                @error('tel')<div class="form-error">{{$message}}</div>@enderror
                <div class="form-group">
                    <label for="content">お問い合わせ内容<span class="required">必須</span></label>
                    <!-- textareaはinputタグではないのでinputタグはいらない -->
                    <textarea id="content" name="user_content" required rows="4"></textarea>
                </div>
                @error('content')<div class="form-error">{{$message}}</div>@enderror
                <div class="form-button">
                    <button class="submit" type="submit">送信</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
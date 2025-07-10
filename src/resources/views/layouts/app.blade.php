{{-- views/layouts下に xxx.blade.php(共通部分をまとめたレイアウトファイル）を作成 --}}
{{-- レイアウトファイル名xxxはプロジェクトによって異なる ex default.blade.phpやapp.blade.php --}}
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    {{-- 共通のcssをまとめたcommon.cssをレイアウトファイルで読み込む --}}
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css') {{-- @yield('css')=各ページごとの@section('css')の中身を読み込む --}}
</head>

<body>
    {{-- header = header全体を構成するボックス --}}
    {{-- header-container = ヘッダー内のaタグやボタンの配置、横幅をコントロールするボックス --}}
    <header class="header">
        <div class="header-container">
            <a class="header__logo" href="index">Contact Form</a>
            <p class="user_name">{{ Auth::user()->name }}さん</p>
        </div>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit">ログアウト</button>
        </form>

    </header>

    <main>
        @yield('content') {{-- @yield('content')=各ページごとの@section('content')の中身に置き換わる --}}
    </main>
</body>

</html>

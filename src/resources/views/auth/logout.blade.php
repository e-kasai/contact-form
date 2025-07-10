@if (Auth::check())
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
@endif

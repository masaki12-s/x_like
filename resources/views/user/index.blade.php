<div>
    <h1>ユーザ作成画面</h1>
    ユーザ作成画面はこちら
    <a href="{{ route('user.create') }}">ユーザ作成</a>
    <h2>作成されたユーザ一覧</h2>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
</div>
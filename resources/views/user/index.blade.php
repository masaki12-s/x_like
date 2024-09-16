<div>
    <h1>ユーザ作成画面</h1>
    <h2>作成されたユーザ一覧</h2>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
</div>
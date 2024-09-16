<div>
    <h1>ユーザ登録</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <label for="name">名前</label>
        <input type="text" name="name" id="name">
        <label for="email">メールアドレス</label>
        <input type="text" name="email" id="email">
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password">
        <button type="submit">登録</button>
</div>
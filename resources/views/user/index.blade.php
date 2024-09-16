<div>
    <h1>ユーザ作成画面</h1>
    ユーザ作成画面はこちら
    <a href="{{ route('user.create') }}">ユーザ作成</a>
    <h2>作成されたユーザ一覧</h2>
    <table>
        <tr>
            <th>ユーザ名</th>
            <th>削除</th>
        </tr>
        <tr>
            @foreach ($users as $user)
            <th>{{ $user->name }}</li>
            <th>
                <form action="{{ route('user.delete', ['id'=>$user->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">削除</button>
                </form>
            </th>
            @endforeach

        </tr>
    </table>
</div>
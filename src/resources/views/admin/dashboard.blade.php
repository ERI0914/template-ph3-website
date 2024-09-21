<!-- resources/views/admin/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ダッシュボード</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">管理者ダッシュボード</h1>

        <div class="card">
            <div class="card-header">
                クイックリンク
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">ユーザー管理</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('quizzes.index') }}">クイズ管理</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">レポート</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- <div class="mt-5">
            <a href="{{ route('logout') }}" class="btn btn-danger">ログアウト</a>
        </div>
        <a href="{{ route('quizzes.index') }}">クイズ</a>
    </div> --}}

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    ログアウト
</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

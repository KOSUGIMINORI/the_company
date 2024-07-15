<?php

session_start(); // セッションを開始する

include '../classes/User.php';

// POSTリクエストの確認
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Deleteボタンが押された場合
    if (isset($_POST['delete'])) {
        // セッションからユーザーIDを取得する
        if (isset($_SESSION['user_id'])) {
            $userId = $_SESSION['user_id'];
            
            $user = new User();
            if ($user->delete($user_id)) {
                // 削除成功時の処理
                // セッションの破棄とログアウト処理（例）
                session_destroy(); // セッションを破棄する
                header("Location: ../login.php"); // ログイン画面にリダイレクトする
                exit;
            } else {
                echo "Failed to delete user."; // 削除失敗時の処理（例）
            }
        } else {
            echo "Session error: User ID not found."; // エラー処理（例）
        }
    } elseif (isset($_POST['cancel'])) {
        // Cancelボタンが押された場合
        header("Location: ../login.php"); // ログイン画面にリダイレクトする
        exit;
    } else {
        echo "Invalid request."; // 不正なリクエスト処理（例）
    }
} else {
    echo "Start page."; // POSTリクエストでない場合の処理（例）
}

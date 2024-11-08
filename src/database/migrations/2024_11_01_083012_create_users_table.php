<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // upで処理の作成。
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            // 名前。
            $table->string('name');
            // メールアドレス(ユニーク)。
            $table->string('email')->unique();
            // メール送信機能 (デフォルトはnull。利用時は別途設定が必要)
            $table->timestamp('email_verified_at')->nullable();
            // パスワード。
            $table->string('password');
            // パスワードリセット用のトークン。
            $table->rememberToken();
            // タイムスタンプ。
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // downでupの処理内容を元に戻す。
    public function down()
    {
        // usersテーブルが存在していたらそれを削除する。
        Schema::dropIfExists('users');
    }
}

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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // 自動インクリメントのプライマリキー
            $table->string('name'); // 名前列
            $table->string('email')->unique(); // ユーザーのメールアドレス（ユニーク）
            $table->string('password'); // パスワード列
            $table->rememberToken(); // パスワードリマインダートークン
            $table->timestamps(); // created_at と updated_at タイムスタンプ
            // 二要素認証のためのカラム
            $table->text('two_factor_secret')->nullable(); // 二要素認証の秘密
            $table->text('two_factor_recovery_codes')->nullable(); // 回復コード
            $table->timestamp('two_factor_confirmed_at')->nullable(); // 確認日時
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

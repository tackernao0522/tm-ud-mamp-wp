# セクション8: WordPressの使い方を知ろう - ボーナスレクチャー

## 86. MAMPでWordPressのセットアップ

+ https://ja.wordpress.org/ =>  `WordPressを入手` => `すべてのリリース` =>  `5.8ブランチ` => `5.82のzip`をMAMPのhtdocsのフォルダにとりあえずダウンロードして解凍する <br>

+ フォルダ名を`blog`にしておく<br>

+ MAMPを起動して、 `localhost/blog`にアクセスするとWordPressのセットアップ画面に移行する<br>

## 87. WordPressをセットアップしよう②

+ wpセットアップ画面の `さあ、始めましょう！`をクリック <br>

+ `MAMP` => `WebStart` => http://localhost/MAMP/?language=English が開かれるので `MySQL`をクリックすると下記の情報が確認できる<br>

```
Host	localhost
Port	3306
Username	root
Password	root
Socket	/Applications/MAMP/tmp/mysql/mysql.sock
```

+ `phpMyAdmin`を起動する<br>

+ `phpMyAdmin` => `新規作成` => `データベース名` => `wordpress`と入力 => `utf8_general_ci` => `作成`(wpセットアップ画面のデータベース名に今回は合わせた) <br>

+ wpセットアップ画面の `ユーザー名` => `root` => `パスワード` => `root` => `データベースのホスト名` => `localhost` => `テーブル接頭辞` => `wp_` => `送信` => `インストール実行` <br>

+ ようこそ画面 => `サイトのタイトル` => `たかちゃんブログ` => `ユーザー名` => `tacker_admin` => `パスワード` => `Czk68346ggz6kxp3` => `メールアドレス` => `takaproject777@gmail.com`<br>

+ `検索エンジンでの表示`は現時点ではMAMPで起動しているのでチェックは入れても入れなくてもどちらでもよい<br>

+ `WordPressをインストール`をクリック<br>

+ `ログイン`をクリックしてログインする(wp管理画面に移行する)<br>

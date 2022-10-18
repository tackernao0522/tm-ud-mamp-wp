## 107. ユーザー管理をしよう

+ wp管理画面 => `ユーザー` => `新規追加` => `ユーザー名` => `tacker_user_001`と入力してみる => `メール` => `takaki55730317@gmail.com`と入力してみる(下記へ続く)<br>

+ `名`(入れても入れなくてもどちらでも良い) => `たかき`と入力してみる => `姓`(必須ではない) => `なかむら` => `サイト`(必須ではない 今回は入れない) => `言語` => `サイトデフォルと` => `パスワード`（生成されてるものがいいと思う) => `e29Z1%UhFvz0)z%^a$Rq$e5)` => `ユーザーに通知を送信` => `チェックを入れたままで良いが開発環境ではメールは届かない` => `権限グループ` => `管理者` => `新規ユーザーを追加`<br>

+ ユーザーは作成する時と編集するときの項目が変わる<br>

+ wp管理画面 => `ユーザー` => `tacker_user_001` => `ニックネーム` => `たかちゃん` => `ブログ上の表示名` => `たかちゃん`(サイトの著者名の部分がこれに変わる) => `ユーザーを更新`<br>

+ ログアウトして今作成したユーザーでログインしてみる<br>

## 108. Gravatarでアバター画像を設定しよう

+ wp管理画面 => `ユーザー` => `Gravatarでプロフィール画像の変更が可能です。` => `Gravatarを作成` => `新規アカウント`を作成して => `画像アップロード`して反映される<br>

+ Gravatarを使わない方法でプロフィール画像を設定するには wp管理画面 => `プラグイン` => `新規追加` => `キーワード` => `simple local avatars`と入力 => `Simple Local Avatars` => `今すぐインストール` => `有効化`(下記へ続く<br>

+ `ユーザー` => `takaproject777@gmail.com` => `Avatar` => `Upload Avatar` => `Choose from Media Library` => `自由に画像を設定できる` => `ユーザーを更新`<br>

+ Gravatarで指定している画像よりも優先される<br>

## 109. 著者別アーカイブページのアドレスを変更しよう

+ 記事の詳細にアクセスすると`作成者` => `tacker_admin`があるがそれをクリックするとTOPページに戻ってしまうがそれを`wp管理画面` => `SEO PACK` => `一般設定` => `その他アーカイブ` => `「著者」のアーカイブページを使用しない` => `いいえ`を選択 => `設定を保存`して`tacker_admin`にアクセスすると投稿者の記事の一覧が表示されるようになる<br>

+ 上記のURLは `http://localhost/blog/author/tacker_admin/`になっている(tacker_adminは管理者ユーザー名であり、パスワードを解析されると非常に危険である)<br>

+ そのことにより`tacker_admin`は知られないようにすることが重要になってくる<br>

+ wp管理画面 => `プラグイン` => `新規追加` => `キーワード` => `edit author slug` => `Edit Author Slug` => `今すぐインストール` => `有効化` <br>

+ wp管理画面 => `ユーザー` => `tacker_admin` => `編集` => `投稿者スラッグ編集` => `投稿者スラッグ` => `カスタム設定` => `1`を選択してみる => `プロフィールを更新` <br>

+ `http://localhost/blog/author/1/`となる<br>


+ `wp管理画面` => `SEO PACK` => `一般設定` => `その他アーカイブ` => `「著者」のアーカイブページを使用しない` => `はい`を選択すると投稿者ページは作成されなくなるが記事詳細ページにアクセスすると作成者名`tacker_admin`は表示されてしまうのでURLは隠れるように`はい`に設定しておいた方がよい<br>

## 110. 権限グループの種類と各権限のできること

+ `tacker_admin` と `tacker_user_001`の両方のユーザーでログインしておく<br>

+ `tacker_admin`の方で`tacker_user_001`のユーザー権限を変更してみる => `tacker_user_001` => `編集` => `権限グループ` => `編集者`を選択 => `ユーザーを更新` => `tacker_user_001`で`ユーザー管理画面にはアクセスできなくなる(http://localhost/blog/wp-admin/users.php)<br>

+ wp管理画面のメニューには権限を与えられているものしか表示されない<br>

+ `tacker_admin`の方で`tacker_user_001`のユーザー権限を変更してみる => `tacker_user_001` => `編集` => `権限グループ` => `投稿者`を選択 => `ユーザーを更新` => `tacker_user_001`の方でリロードするとまた権限のあるメニューが制限されている<br>

+ `tacker_admin`の方で`tacker_user_001`のユーザー権限を変更してみる => `tacker_user_001` => `編集` => `権限グループ` => `寄稿者`を選択 => `ユーザーを更新` => `tacker_user_001`の方でリロードするとまた権限のあるメニューが制限されている<br>

+ `tacker_admin`の方で権限を`寄稿者`の状態で`投稿` => `新規追加` => `タイトルを追加` => `寄稿者の投稿です`と入力してみる => `公開`(レビュー待ちとして送信となる) => `レビュー待ちとして送信`をクリック => まだこの状態では公開されていない（下記へ続く）<br>

+ 上記の投稿はまだレビュー待ちとなっている => この投稿を決定できるのは権限が `編集者`以上になる => `tacker_admin`の方で => `投稿` => レビュー待ちとなっている投稿をクリックして => `公開` => `公開`とすれば投稿完了となる<br>

+ `tacker_admin`の方で`tacker_user_001`のユーザー権限を変更してみる => `tacker_user_001` => `編集` => `権限グループ` => `購読者`を選択 => `ユーザーを更新` => Dashboardとプロフィールのみアクセスできる<br>
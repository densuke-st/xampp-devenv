# XAMPPもどきのDevContainerサンプル

## これは?

XAMPPっぽい環境をDocker+DevContainerで作成するサンプルです。
本家XAMPPに比べると圧倒的に機能が不足しております。

## 必要なもの

- Docker環境
- VisualStudio code
    - DevContainer拡張必須

# 始める前に注意点

ローカル環境での開発を意識したものとなっているため、この構成を直接外部からアクセスできる状況に置くのだけはやめてください。
きっとDB覗かれて「お漏らし」と後ろ指指されるでしょう。

# 始め方

このディレクトリでパレットを開き、 `Rebuild and Reopen in Container`を実行してください。
イメージの取得とビルドを行った上で環境が切り替わります。
初回は時間がかかると思います、ログを出してしばらくお待ちください。

# サーバーアクセスについて

* サービス名 [web](http://localhost:8080/)
    * Webサーバー部分(PHP込み)
    * ディレクトリsrc以下が見えるようになっています
    * http://localhost:8080/ でホストからアクセス可能
* サービス名 db
    * DBサーバー(MariaDB)
    * 管理者設定が入っています、設定自体は `.devcontainer/pass.txt` に含まれています
        * セキュリティ的に問題あるのは承知の上で使って下さい
* サービス名 [pma](http://localhost:8081/)
    * phpMyAdminです
    * サービスdbを指す設定になっています、アカウントを入れれば接続できます
    * http://localhost:8081/ でホストからアクセス可能

# PHP設定について

[php:apache](https://hub.docker.com/_/php/tags)の標準分に加え、以下のモジュールが組み込まれています。
d-p-e-iおよびpeclによるインストールです。詳しくは`.devcontainer/image/Dockerfile`を参照してください。

- mysqli
- pdo_mysql(および依存物)
- APCu

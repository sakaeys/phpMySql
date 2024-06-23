# Docker で Apache/PHP/MySQL 環境構築

## 前提環境
* OS : Windows11
* Docker Desktop : 4.30.0 (149282)
* Docker Engine : v26.1.1
* VS Code : 1.891

## 構築環境
* PHP 8.1 (on Apache)
* MySQL 8.0

## 構築手順

* Docker を起動
* リポジトリをローカルに取得
* VS Code で取得したリポジトリを開く
* VS Code でターミナルを開いて次手順を実施

```
# login docker hub
docker login

# build & up container 
docker compose up --build -d

# confirn running
docker compose ps
```

* ブラウザから確認
  * http://localhost を表示して PHP 動作を確認
  * http://localhost/connect.php を表示して DB 接続を確認
  * http://localhost/users.php を表示して DB 初期化とレコード取得を確認
    * DB が存在しないときに DB 初期化が実行されます、再初期化時は data フォルダを削除する

## 環境破棄

```
# stop & delete container
docker compose down

# delete images
docker rmi test-service-app test-service-db
```

## インフラバージョン
* [PHP バージョンとサポート期限 2023](https://www.php.net/supported-versions.php)
  * [SAKI Web Design - PHP version](https://sakidesign.com/php-version-2023/)
  * セキュリティFIXのみの安定版 8.1 を選択（7.4.33 はサポート終了）
* [MySQLサーバーのバージョン](https://docs.oracle.com/ja-jp/iaas/mysql-database/doc/mysql-server-versions.html)
  * LTS の 8.4 がリリースされたが、まだ時間が経っていないので 8.0 で構築（at 2024/06）
  * 7.4 系はレンタルサーバーでも非奨励、サポート終了の傾向
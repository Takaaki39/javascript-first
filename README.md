# javascript-first

## 環境構築

### Docker ビルド

1. git clone git@github.com:Takaaki39/javascript-first.git
2. cd javascript-first/
3. docker-compose up -d --build
   ※MySQL は OS によって起動しない場合があるのでそれぞれの PC に合わせて docker-compose.yml ファイルを編集してください。

### Laravel 環境構築

1. docker-compose exec php bash
2. composer install
3. cp .env.example .env
4. php artisan key:generate
5. exit
6. ※windows の場合 : sudo chmod -R 777 \*

## 使用技術(実行環境)

- php 8.1.33
- Laravel 8.83.29
- MySQL 8.0.26

## URL

- 開発環境：http://localhost/

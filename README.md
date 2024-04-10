# 20240410_nakahara_test
##
docker-compose up -d --build
composer create-project "laravel/laravel=8.*" . --prefer-dist
.envファイルの環境変数を変更
php artisan make:controller ContactController
php artisan make:controlle
php artisan key:generate
php artisan make:migration create_contacts_table
php artisan make:migration create_categories_table
php artisan migrate
php artisan make:seeder ContentsTableSeeder
php artisan make:seeder CategoriesTableSeeder
php artisan migrate:fresh
php artisan db:seed


開発環境：http://localhost/

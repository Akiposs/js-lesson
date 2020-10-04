# 処理に失敗したときコマンドを終了する
set -e

echo ==== nginx start ====
php-fpm -d

echo ==== composer install ====
/var/www/codeIgniter_app composer install
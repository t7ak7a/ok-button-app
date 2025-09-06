FROM php:8.1-apache

# 必要な拡張機能をインストール
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Apache の rewrite モジュールを有効化
RUN a2enmod rewrite

# Composer のインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
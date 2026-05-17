# 基于官方 PHP7.4 Apache 镜像
FROM php:7.4-apache

# 第一步：安装工具 + 替换阿里云源（解决网络问题）
RUN sed -i 's/deb.debian.org/mirrors.aliyun.com/g' /etc/apt/sources.list && \
    sed -i 's/security.debian.org/mirrors.aliyun.com/g' /etc/apt/sources.list && \
    apt-get update && apt-get install -y wget zip unzip && \
    rm -rf /var/lib/apt/lists/*

# 第二步：使用第三方工具安装 PHP 扩展（避免手动编译错误）
RUN wget -O /usr/local/bin/install-php-extensions https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions && \
    chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions pdo_mysql mbstring xml gd zip

# 第三步：Apache 核心配置（TP6 必需）
# 开启重写模块
RUN a2enmod rewrite
# 设置 TP6 public 目录为根目录
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf && \
    sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 第四步：修复目录权限（解决 403 核心问题）
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html
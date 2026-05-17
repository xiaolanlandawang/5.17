WEIHUA
===============

### 部署环境
~~~
软件	最低版本	推荐版本
PHP	7.4+	8.0 / 8.1
MySQL	5.7+	8.0
Nginx	1.18+	1.20+
Redis	5.0+	6.0+
~~~

### php必备拓展
~~~
openssl
pdo
pdo_mysql
mbstring
curl
zip
gd
fileinfo
json
session
redis
~~~

### 目录写入权限
~~~bash
# 项目根目录执行
chmod -R 755 ./
chmod -R 777 runtime/
chmod -R 777 public/upload/
chmod -R 777 public/static/
~~~


### 伪静态设置
~~~
location / {
    if (!-e $request_filename) {
        rewrite ^(.*)$ /index.php?s=$1 last;
    }
}
~~~

### 配置文件路径
~~~
/config/database.php
/.env  # 优先读取

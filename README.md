# shujuku-laravel-php

- mvc架构 **自行查询mvc含义**
- 控制器路径 *app/Http/Controllers*
- model 路径 *app/*
- view路径 *resources/views*
- 环境配置 *.env*
    ```
        #基本配置
        APP_NAME=Laravel         
        APP_ENV=local
        APP_KEY=base64:0EY/rlRXJFBYKUAwyA+xzAQgHmokLxjmemYazdVkrd4=
        APP_DEBUG=true
        APP_URL=http://127.0.0.1
        
        #数据库配置
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1     #数据库地址
        DB_PORT=3306          #端口，一般多是3306
        DB_DATABASE=shujuku   #用的库名
        DB_USERNAME=root      #数据库用户名
        DB_PASSWORD=          #密码
        
        …………
    ```
前端页面格式 **.blade.php**
网站缓存 **session（自行查询）**
laravel 当前版本文档 *https://laravelacademy.org/laravel-docs-5_3*

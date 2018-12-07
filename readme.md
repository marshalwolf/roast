# Roast
一个完整的、API 驱动的、包含后台管理系统的、前后端分离的单页面应用。

### 使用说明

```
    composer install
    cp .env.example .env
    php artisan key:generate
``` 

 配置 `.env` 中的数据库配置，Github 相关配置和高德地图 Web 服务 API KEY，然后运行
 
```
    php artisan migrate
    php artisan passport:install

```  

 执行数据库变更，并初始化 API 认证所需脚手架，后端初始化完成之后，初始化前端资源：

```
    npm install 
    npm remove bootstrap --save-dev
    npm remove bootstrap-sass --save-dev
    npm run dev
```

 配置应用本地域名为 `roast.test`，就可访问应用了。 
1. 初始化一个项目
`composer init`

2. 搭建基础功能
>以微框架Slim 微基础框架,php 7.0 为PHP版本

3. 定义框架目录结构
>仿照Laravel

```
├── app
│   ├── Helpers.php
│   ├── Http
│   │   └── Controllers
│   └── Models
├── bootstrap
│   ├── app.php
│   └── autoload.php
├── composer.json
├── config
├── public
│   └── index.php
├── routers
└── tests
```

4. 安装依赖库
`composer install`

5. 启动框架测试
`php -S 0.0.0.0:8000 -t public`

6. 完善路由和控制器功能

7. 增加数据库功能组件
>使用Laravel ORM

`composer require illuminate/database "~5.5"`


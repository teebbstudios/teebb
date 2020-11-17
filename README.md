# TEEBB内容管理系统使用文档
TEEBB是基于Symfony框架开发的一款可自由扩展的内容管理系统。您可以自由使用本软件来构建您的博客、网站等应用。本项目将会长期开发维护，欢迎使用。  
TEEBB的原理设计参考了著名的Drupal，注重内容的扩展性与功能性，因为Drupal的学习曲线太高了，于是我开发了TEEBB，它更轻量也更容易上手。目前0.x版本已实现了内容管理和一些基本功能，
注重内容类型网站的开发。在后续版本中将实现I18N（国际化），RESTful API，消息队列，缓存等等功能。如果您是Symfony初学者，TEEBB用到了Symfony的多个组件，是个不错的学习案例。  
欢迎您进行Fork，并提交Pull Request，我们一起开发维护TEEBB，如果后续TEEBB有获利计划，我将优先通知您参与并获取相应利益。  
![alt TEEBB控制台](docs/teebb_images/teebb-dashboard.png "TEEBB控制台")  

### 1.TEEBB的下载和安装说明
TEEBB的运行环境：   
PHP 7.2.5及以上、Mysql 5.7.x、推荐安装：Symfony 命令行工具，详见：www.symfony.com

```
#下载TEEBB
composer create-project teebbstudios/teebb acme
cd acme
#安装JS库
npm install
gulp build
#安装CKEDITOR 资源包
symfony console ckeditor:install
#TEEBB资源安装
symfony console assets:install public --symlink
#复制.env文件到.env.local, 并修改数据库DATABASE_URL及MAILER_DSN信息
cp .env .env.local
#初始化数据库
symfony console teebb:database:init -d
#运行服务器
symfony serve
#打开页面登录管理页面
open http://127.0.0.1:8000/admin
```
> 初始管理员账号：admin  
> 初始管理员密码：admin

### 2.TEEBB的版本号及开发周期说明
TEEBB的版本号遵循语义化版本格式：主版本号.次版本号.修订号  
TEEBB的次版本号（例如：0.2.x，0.3.x）发布周期：至少每四个月发布一次。  
TEEBB的修订版本号（例如：0.1.1，0.1.2）发布周期：至少每三个星期发布一次。  

> Tips:目前TEEBB 0.x版本的核心功能bundle仅包含在teebbstudios/core-bundle，并不利于后期维护，因此将在1.x版本重构TEEBB。  

### 3.TEEBB的使用介绍
TEEBB的主题是内容管理，但是现实中各种各样不同类型的内容太多了，为了满足各种不同的需求以及实现灵活的扩展性，原理上我借鉴了国外的两个著名开源项目Drupal和Godot。  
做个假设：  
> 在另一个平行时空，我不是程序员而是一个名不见经传的在线小报记者，每天都忙于收集各种新闻，并发表在新闻网站上。
> 我的新闻网站分为很多不同的栏目，有的栏目要求必须添加新闻图片及文字，有的栏目只用上传新闻文字，有的栏目只用上传新闻图片。  
> 传统的内容管理系统是怎么做的呢?   
> 它可能预先定义了一个统一的新闻格式，有标题、主体（Body）、封面图片等等所有可能用到的东西，然后我们创建对应的栏目分类词，再根据需要把新添加的新闻指定到对应的栏目中，这是一个好办法。但是我觉得这样灵活性及扩展性就不那么好了。  
> 如果我们能把新闻中所用到的标题、主体（Body）、图片等等信息抽取成不同类型的组件（我把这种组件称为“字段”，后面都称为“字段”），然后将用到的字段组合成不同的内容类型，这样会在最大程度上实现灵活性及扩展性。  
> 在TEEBB中，目前实现了内容、评论、分类、用户四种bundle包。这四种bundle的具体实现类型都可以组合不同的字段以实现不同的需求。  
  
[3.1 内容bundle](docs/3-1conent-bundle.md)  
    - [3.1.1 创建第一个内容类型](docs/3-1conent-bundle.md)  
[3.2 字段](docs/3-2field.md)  
    - [3.2.1 TEEBB内置的字段](docs/3-2field.md)  
    - [3.2.2 TEEBB中常用字段的设置](docs/3-2field.md)  
[3.3 内容](docs/3-3conent.md)  
    - [3.3.1 添加内容](docs/3-3conent.md)  
    - [3.3.2 内容的查询（未实现，后续版本实现）](docs/3-3conent.md)  
[3.4 分类bundle](docs/3-4taxonomy-bundle.md)  
    - [3.4.1 创建分类类型](docs/3-4taxonomy-bundle.md)  
    - [3.4.2 分类类型中字段的设置](docs/3-4taxonomy-bundle.md)  
    - [3.4.3 添加分类词汇](docs/3-4taxonomy-bundle.md)  
    - [3.4.4 分类字段的使用](docs/3-4taxonomy-bundle.md)  
[3.5 评论bundle](docs/3-5comment-bundle.md)  
    - [3.5.1 创建评论类型](docs/3-5comment-bundle.md)  
    - [3.5.2 评论类型中字段的设置](docs/3-5comment-bundle.md)  
    - [3.5.3 评论字段的使用](docs/3-5comment-bundle.md)  
    - [3.5.4 管理评论内容](docs/3-5comment-bundle.md)  
[3.6 用户与用户组](docs/3-6user-bundle-group.md)  
    - [3.6.1 用户的概念](docs/3-6user-bundle-group.md)  
    - [3.6.2 用户的字段管理（后续版本实现）](docs/3-6user-bundle-group.md)  
    - [3.6.3 用户组及权限](docs/3-6user-bundle-group.md)  
[3.7 菜单系统](docs/3-7menu-system.md)  
    - [3.7.1 创建第一个菜单](docs/3-7menu-system.md)  
    - [3.7.2 菜单的显示](docs/3-7menu-system.md)  
[3.8 常用Twig函数及全局变量(将会有视频教程讲解，敬请期待)](docs/3-8twig-front-route.md)  

### 4.基于TEEBB的开发（将有免费视频教程，敬请期待）
TEEBB的设计就是要高扩展性，因此我们可以在TEEBB上进行二次开发。TEEBB默认提供了内容bundle、分类bundle、评论bundle、用户bundle。  
如果有一天有个需求开发一个小型的在线商城。我们可以利用图像字段作为商品的图像信息，利用布尔值字段做为商品的上下架信息、全新或二手信息，利用小数字段为商品的价格信息等等。这样我们可以创建一个bundle作为SKU对象，再创建一个bundle做为商品对象并两者进行关联以实现商城功能。  
不止商城，其他类型的应用也完全可以在TEEBB上进行二次开发。  
Wooooo！这就是我对TEEBB的设想，如果我们基于TEEBB的二次开发能做些bundle产品并出售赚取一些利润，那就再好不过了。：）  
4.1	创建自定义字段  
    - 4.1.1	FieldType注解介绍  
    - 4.1.2	实现注解中的所有的类  
4.2 创建自定义bundle  
    - 4.2.1	EntityType注解介绍  
    - 4.2.2	实现EntityType中的所有类  
> Tips: 此节内容较多，文字无法完全表述，将有免费的视频教程推出。基于TEEBB的开发将以视频教程的形式发布在www.teebb.com上，敬请期待。

### 5.TEEBB的Roadmap
目前TEEBB发布了0.1.0版本，仍有不少功能急需完善，暂将一些未实现功能按优先级列下，暂不公布时间线，我把其他工作做完就会完善的，表着急啊：）。
1. ckeditor编辑器的图像上传。  
2. 控制台Topbar及内容列表搜索过滤。  
3. 用户字段的实现及前端 分类 内容 字段的显示。  
4. 用户的字段管理。  
5. 缓存。  
6. RESTful API, 使用api-platform开发。  
7. 格式化器及ckeditor编辑器在使用时联动的优化。  
8. 控制台Topbar面包屑功能。  
9. bug修复。  

### 6.TEEBB开源协议
本软件遵循MIT协议。如果您能在页面上注明您的应用使用了TEEBB，本人将万分感谢。：）
### 7.写在最后
本人可接Symfony开发的工作，正规公司资质，可开增值税发票，如有开发业务请与我联系。QQ/微信：443580003
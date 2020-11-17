#### 3.8 常用Twig函数及全局变量(将会有视频教程讲解，敬请期待)
很可惜，TEEBB并没有设计模板系统。如果你经常用Twig，会发现使用Twig也能很快速的完成前端页面模板。
TEEBB中已经有了一些前台页面的Route路径，使用命令：
```
symfony console debug:route 
```
|  Route  |  Path  |  描述  |
|  ----  |  ----  |  ----  |
|  teebb_user_login	  |  /login  |  用户登录   |
|  teebb_user_logout	  |  /logout   |  用户退出   |
|  teebb_user_register 	  |  /register  |  用户注册   |
|  teebb_user_resetting_request	  |  /resetting  |  重置密码   |
|  teebb_content_show	  |  /content/{slug}  |  内容显示   |
|  teebb_types_contents	  |  /types/{typeAlias}/contents  |  显示某内容类型下所有内容   |
|  teebb_taxonomy_contents	  |  /taxonomy/{slug}/contents   |  显示某分类词汇所有内容   |

TEEBB提供了Twig全局变量：teebb_core 用于获取系统信息。使用如下方法可获取TEEBB的系统设置信息：
```twig
{{teebb_core.optionValue('system')}} 
```

> Tips：更多系统设置信息将在后续版本中更新。

控制台首页有一些内容及评论的列表块，使用了SonataBlockBundle，这些Block是公用的，可以在前台页面使用到的。后续我将在视频教程中演示。
#CHANGELOG

0.1.1:  
1. fosckeditorbundle 添加文件图片拖拽上传和图片上传功能
2. 用户组权限调整，不同用户组可设置不同的ckeditor工具栏配置
3. 文本、长文本字段默认过滤所有HTML标签

0.1.2: 
1. 邮件发送fromAddress去除硬编码，改为在teebb_core.yaml文件中手动配置且必须配置
2. Dashboard控制台首页blocks、侧边栏菜单使用单独yaml文件配置

0.1.3
1. Kernel版本号修改
2. block ContentsBlockService 添加类型参数用于获取指定类型内容列表
3. 添加"用户字段"菜单，对用户字段进行管理，用户默认增加头像字段。用户表单调整。
4. 添加Twig函数： show_content_all_fields 获取并显示当前内容所有字段；get_content_field 获取当前内容指定字段数据
5. 添加Twig macro方法：showContentAllFieldsData 用此macro可方便的显示当前内容所有字段

0.1.4
1. teebb.core.block.content Block调整过滤条件

0.1.5
1. 增加字段缓存  
2. 前台页面增加DOM块级缓存  
3. 系统设置优化  
4. bug修复

0.1.6
1. prod环境下动态mapping字段，doctrine需要auto_generate_proxy_classes设置为true

0.1.7
1. prod环境下动态mapping字段，doctrine需要auto_generate_proxy_classes设置为EVAL对性能更好些 

0.1.8
1. ckeditor添加codesnippet插件，修改ckeditor配置
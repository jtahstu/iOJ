## iOJ题解网站

### 一、设计任务与目标

通过对该课题的设计，加强对网站开发过程的问题分析、系统设计、程序编码、测试等基本功能语法使用的熟练程度以及掌握对相关软件的使用。IOJ题解网站是基于PHP（外文名:PHP: Hypertext Preprocessor，中文名：“超文本预处理器”）开源脚本语言和 MySQL关系型数据库管理系统，使用 Laravel 5(一套简洁、优雅的PHP Web开发框架)搭建的OJ题解网站。目前已上线运行，网址：[http://www.jtahstu.com/ioj/public](http://www.jtahstu.com/ioj/public)，欢迎大家访问学习。 

目前iOJ拥有安科OJ 13599人次正确提交数据，合计339道题解，南阳967道题解，杭电3765道题解，北大2451道题解和浙大2109道题解，共计9631道题解。iOJ涵盖范围，安科OJ、南阳OJ、杭电OJ、北大OJ和浙大OJ，其他功能仍在coding中... 

本网站是使用Bootstrap前端框架开发的页面，由于该框架已经可以很好自适应，所以本网站在移动端也能有很好的体验。当然手机浏览器能打开使用还不是终点，于是便开发出Android端的APP软件，下载地址：[http://cdn.jtahstu.com/IOJ.apk](http://cdn.jtahstu.com/IOJ.apk)，支持Android4.0及以上。 

### 二、总体设计
#### 2.1 网站功能描述

该网站实现的功能有：可以查看各大主流OJ的题解代码；可以便捷的使用安科新OJ，南阳OJ，杭电OJ，北大OJ和浙大OJ刷题；用户登录注册；在用户登录后可查看安科OJ题解；对OJ题目进行评论和发表心情；南阳OJ题目分类训练；ACM书籍下载；对OJ题目进行检索；ACM进阶。

##### 2.1.1、事先准备工作
(1)题解代码是事先准备好存储在数据库中的，至于题解是从哪里得到的，请关注本人的博客。 
(2)然后就是需要爬取各大OJ的题目列表然后存储到数据库中，这里南阳OJ是例外，经常刷题的都知道，南阳OJ网站的网速非常非常非常慢，相对的其他OJ网速好很多，在这么慢的网速下去加载南阳OJ的题目页面，显然是不明智的，于是又把南阳OJ网站的题目信息都通过爬虫，抓取了过来。 
(3)南阳OJ就是那么特殊，他有一个题目分类的东西，咦，好东西，拿过来，啪啪啪敲了一大堆代码又把题目列表抓了过来。 
(4)关于ACM书籍的pdf文件，上传百度云，分享。 

##### 2.1.2、查看题解代码
这个查看题解的逻辑一直在修改 ... 一般是为了防爬虫

##### 2.1.3、题目检索
在这么多的题目中想找到想要的题目也挺费时，所以检索功能是很有必要的，可以指定OJ，然后按题号或标题来检索，快捷方便，这里也是用到了ajax异步刷新技术。 

##### 2.1.4、题目分类
这个部分是完全参考的南阳OJ做法，非常有用，有利于教学和学习，把同种类型的题目放在一起训练，当然了这里是一起提供题解，还是为了便利。 

##### 2.1.5、ACM书籍
这里是向有意学习算法的同学，提供一些比较好的书，更好的学习吧。 

##### 2.1.6、ACM进阶
对，没错，这个还是抄南阳OJ的，写的非常好，没道理不拿来推广。 
##### 2.1.7、APP
主要还是为了方便。

### 2.2、功能模块划分
![功能模块划分][1]

## 三、详细设计
### 3.1、首页
![首页][2]

### 3.2、登录注册界面
![登录][3]
![注册][4]

### 3.3、题目列表
![题目列表][5]

### 3.4、题解页面
![题解页面][6]

### 3.5、检索页面
![检索页面][7]

### 3.6、题目分类
![题目分类1][8]
![题目分类2][9]

### 3.7、ACM书籍
![ACM书籍][10]

### 3.8、移动端
![移动端][11]

更多详情请访问首页，使用注册的账号登录后，点击用户名下的课程设计报告。[http://www.jtahstu.com/ioj/public/](http://www.jtahstu.com/ioj/public/)

## 四、项目总结
这是本人的一个比较功能完善的网站，以前开发的一些网站功能都比较简单，几个页面而已，而且该项目首次采用框架开发，使用的是国外最流行的PHP Web框架Laravel，在使用的时候文档基本都翻烂了，毕竟也不多，然后出现问题的时候就会很郁闷，基本找不到问题解决方案，一搜就跳到国外的那种技术论坛去了，这不是关键，关键是他们都是说英文的啊，所以然后就得想替代方案或者放弃。 

官方文档都是英文的，除了代码能看懂一些以外，文档部分基本跳过，看着实在是难受，英语太差了，OMG。所以可能该项目不是很复杂，但是学习的过程还是比较坎坷的。中文网站基本就是翻译官方文档，然后版本之间的使用方法还有些不同，本网站就有过版本调整，一开始使用的是Laravel 5.1开发，后来又降级到Laravel 5.0版本来做。 

框架开发的好处显而易见，你不用去写一大堆别人早就实现了的功能代码，Laravel宣称“为Web艺术家创造的PHP框架”（The PHP Framework For Web Artisans），简洁明了，优雅的语法，现代化的工具集，仿佛在施展魔术，通过神奇的ORM，轻松上手的路由器，强大的队列操作类库，以及简便的用户认证系统，这些工具让你感受到现代化PHP的高可维护性和便捷性。 
而且通过本次开发，让个人的前端（bootstrap，html，css，jQuery）、移动端优化、PHP框架都得到了很大的锻炼，在框架方面由于首次使用，积累了部分使用经验，对于以后的学习那是非常好的，PHP和数据库方面也能熟练使用，保证不出现严重bug。 

网站链接：http://www.jtahstu.com/ioj/public/

Github地址：https://github.com/jtahstu/iOJ

项目报告：http://www.jtahstu.com/ioj/public/report(需要登录账号)


  [1]: http://www.jtahstu.com/ioj/public/img/report/rep2.png
  [2]: http://www.jtahstu.com/ioj/public/img/report/rep3.png
  [3]: http://www.jtahstu.com/ioj/public/img/report/rep4.png
  [4]: http://www.jtahstu.com/ioj/public/img/report/rep5.png
  [5]: http://www.jtahstu.com/ioj/public/img/report/rep6.png
  [6]: http://www.jtahstu.com/ioj/public/img/report/rep9.png
  [7]: http://www.jtahstu.com/ioj/public/img/report/rep8.png
  [8]: http://www.jtahstu.com/ioj/public/img/report/rep10.png
  [9]: http://www.jtahstu.com/ioj/public/img/report/rep11.png
  [10]: http://www.jtahstu.com/ioj/public/img/report/rep12.png
  [11]: http://www.jtahstu.com/ioj/public/img/report/rep14.png

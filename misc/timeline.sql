-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: timeline
-- ------------------------------------------------------
-- Server version	5.7.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL DEFAULT '' COMMENT '标题',
  `desc` varchar(255) NOT NULL DEFAULT '' COMMENT '摘要',
  `content` text NOT NULL COMMENT '内容',
  `mood` varchar(255) NOT NULL DEFAULT '' COMMENT '心情',
  `author` varchar(255) NOT NULL DEFAULT '' COMMENT '昵称',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '地点',
  `weather` varchar(255) NOT NULL DEFAULT '' COMMENT '天气',
  `time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `date` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '年月日',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'测试','','测试','','','','',35678,1515888000,0),(2,'测试','','测试','','','','',51234,1515888000,0),(3,'时光轴搭建初步完成啦','','昨天晚上萌生了一个搭建一个自己的时光轴的想法，今天下午花了半晌把时光轴后台页面搭建完成，并部署到了线上。目前除了界面没有完善外，基本功能已基本实现了。可以发布内容，保存至数据库。之后任务：把页面修饰一遍，完成时光轴的展示页，哈哈。','','','','',54321,1515888000,0),(4,'手机界面测试','','浏览器:夸克浏览器。\n问题:页面加载有点慢，点击手机返回按键也有点慢，同时页面没有返回到上一界面','','','','',65123,1515888000,0),(5,'手机界面测试','','浏览器:夸克浏览器。\n问题:页面加载有点慢，点击手机返回按键也有点慢，同时页面没有返回到上一界面','','','','',76515,1515888000,0),(6,'手机界面测试','','浏览器:夸克浏览器。\n问题:页面加载有点慢，点击手机返回按键也有点慢，同时页面没有返回到上一界面；点击提交后，没有弹框说明提交成功与否\n','','','','',86333,1515888000,0),(7,'test#','desc','测试出了标题个内容的其他字段是否提交成功','mood','name','address','weather',20111,1516060800,0),(8,'测试反馈','','亲测可行，除了一些页面上的问题之外，数据都可顺利提交并保存。','','','','',34198,1516060800,0),(9,'账号','','百度云：2019169887@qq.com环保资料,1079551334@qq.com空,sss2019169887需要验证15598118350这个手机号，不可用,17731848350空仓库,qq 1079551334&&2019169887空仓库，可用','','','','',0,0,1),(10,'学习','','learn ssh，linux：用户，chmod，chown，文件管理权限等。git hooks，yii，tp5','','','','',0,0,0),(43,'跨域问题','','在入口文件中设置允许跨域，解决','','','','',43021,1516060800,0),(44,'点子#时光轴','','增加登录注册功能、第三方登录接入、增加标签，可以选择自己已建立的标签、页面底部实现小游戏功能、顶部可以定制内容，如天气预报，电影推荐，好听歌单，风景图片，人物头像，名言警句，段子、新闻时政，每日一词，每日一句（单词）等等等等，静待发掘','','','','',47854,1516060800,0),(46,'好','','1','','','','',56000,1516060800,0),(47,'睡前#','','睡前，回顾今天。\n做了时光轴前后台两个页面，以及api数据获取，并将链接展示到了blog上。\n目前为止，有三个自己的小网站了\n接下来丰富网站内容，坚持记录博客，总结经验\n不忘初衷\nhello birds\n晚安','晴朗','','','',66000,1516060800,0),(48,'上班#测试','','今天起的晚了，赶到公司迟到了5分钟。\n因为这几天睡的比较晚，12点到1点多才睡，导致身体有点不舒服。\n直接感受是，身上疼，腿疼，浑身不舒服。。。老了\n以后要早睡','','','','',76000,1516060800,0),(49,'睡前#补发#','','微信端可以正常打开时光轴展示页，但再夸克浏览器上数据不能正确的渲染，而是显示了vue的标签。\n突然这条消息保存失败了，上条消息还可以。\n算了，睡觉，明天debug，同时增加网站安全性。半夜 12:02','','','','',38168,1516032000,0),(50,'备忘#','','git 钩子 \nasync','','','','',41953,1516032000,0),(51,'腿疼','','这几天睡的太晚。腿疼\n今晚起11点前睡觉','','','','',57252,1516032000,0),(52,'下班#','','二维码，excel导出数据\n提高工作效率\n先整理思路，然后再写','','','','',74385,1516032000,0),(53,'睡','','sleep','','','','',4472,1516118400,0),(54,'上班','','昨晚吃的麻辣烫，加上路边买的凉菜，鸭肉。\n吃的有点多。\n今天肚子不舒服，油腻的感觉，嘴里也没有味觉，感觉舌头木木的。\n今后不要吃垃圾食品，不吃麻辣烫，保持克制。\n现在不是小孩了，要忌口，多吃健康，少油，水果，蔬菜，清淡的东西。\n学会养生，学会照顾自己。\n','','','','',36029,1516118400,0),(55,'午饭','','慢工出细活','','','','',46392,1516118400,0),(56,'点子','','时光轴私人定制系统，个性化定制。\n目的:人们都有展示自我，和他人相互分享的需求。然而有些时候，人们也有一些想对自己说的话，或者是自己的生活足记，并不需要都发表在空间或者朋友圈中。这个系统就类似写日记一样，既可以展示自己想要展示的内容，也有自己的私密空间。\n每个人可以定制个性化的域名，也可以定制个性化的页面，有一些页面上的好点子可以提出需求，等等。\n和博客类似，但是它很小巧；和日记类似，但是他可以以个人主页，小的app，小的网站等的形式分享。\n','','','','',47362,1516118400,1),(57,'点子2','','可以在等公交时，吃饭时，任意的闲暇时间，只要心里有一些想说的话，点子，就可以随时记录。\n克服了用笔写日记的死板。\n你可能会有疑问，这和qq,朋友圈等等类似，别人何不使用qq,wechat，等呢。\n它的优点就在于便捷，高度的自定义。。。更多点子有待思考发掘','','','','',47653,1516118400,1),(58,'下班','','重要的说三遍。\n写代码要先整理思路，\n写代码要先整理思路，\n写代码要先整理思路。\n不要上来就上手写。\n今天维护微擎的一个商城项目。由于没有整理好思路就写，遇到了一些bug，但是并没有思考这个bug造成的实际原因，而直接调试，浪费了许多不该浪费的时间。\n最后找到主要原因是ajax提交的参数和直接访问页面提交的参数不同，导致了虽然访问的是一个页面，但是两次查找数据库返回的参数不同。\n以后，写代码前，要思考该页面的路由是怎么写的。\n还页面具体是怎么生成的，都访问了哪些文件，调用了哪些方法。\n最后，在写逻辑时，一定要先整理思路，思考这个逻辑该怎么写。将步骤几下来，然后在开始写代码。如果对框架不熟悉，一定要先看文档，仔细看文档，避免反复查找一些方法，同时避免出错。\n写代码一定要仔细，熟记自己都写了哪些方法，注意方法间的关联，不能出现这儿漏了个参数，那漏个符号的低级错误。\n最后强调三遍。写代码前:\n一定要看文档！\n一定要看文档！\n一定要看文档！\n不熟悉，多看几遍。\n\n','','','','',72982,1516118400,0),(59,'睡前','','重新看了看yii的文档，发现英文的文档也可以比较流畅的读下来了。看了url部分，感觉比原先理解了好多。书读百遍，其义自见。sleep','','','','',2934,1516204800,0),(60,'睡前','','抽时间翻译yii路由部分。因为这部分官方文档是英文版的','','','','',3005,1516204800,0),(61,'觉醒','','听了杰伦的歌，其他歌手的歌都不想听了，怎么办','','','','',26191,1516204800,0),(62,'上班前','','钩子，async，yii，将时光机项目整合到一起，第三方登录','','','','',33134,1516204800,0),(63,'睡前（补）','','ssh，翻译yii，翻译git官网文档，总结git hooks，总结vue-cli，总结time_line','','','','',33527,1516291200,0),(64,'oss','','图片cdn，回源','','','','',53389,1516291200,0),(65,'送送送','   ','发发发','','','','',80421,1516291200,0),(66,'当地的','','说三道四多','','','','',80488,1516291200,0),(67,'睡前','','做一个md的模板引擎，类似smarty，但是它渲染的是md文件而不是html\n时光机：登陆注册功能','','','','',85820,1516291200,0),(68,'终于周末了','','连着两周没注意了，终于周末了。\n妈的，刚出门，鸟屎拉身上了。\n计划:营销平台，分销系统，vue组件，第三方登录。\n定了计划实现不了还不如不定。','','','','',46805,1516464000,0),(69,'出差','','武汉-惠州，出发','','','','',73982,1516550400,0),(70,'惠州第一天','','webpack开发app，webpack反向代理解决跨域，websocket+redis+mysql实现微信对接客服系统，后台定时任务发送短信验证码','','','','',64543,1516636800,0),(71,'惠州第二天','','chrome模拟websocket请求插件：Simple WebSocket Client\nhttps://github.com/SimulatedGREG/electron-vue\nposix_getpid 返回当前进程 id windows中用不了可以使用getmypid() ，get_current_user替代\nchat.workerman.net/?room_id=2\nhttps://github.com/ilyagru/Space-Snake.git','','','','',42839,1516723200,0),(72,'下班 惠州','','Linux 进程后台运行的几种方式（screen）\nhttps://segmentfault.com/a/1190000002607962\nvux\nvuemate','','','','',73542,1516723200,0),(73,'周六加班','','感冒发烧，来惠州水土不服。\n主要还是这边温度和春天似的，风大，穿的少，宜感冒。\n不要总抱着自己身体好，不会生病的想法，只有生病了，你才会后悔当时没穿厚点，你才知道生病有多难受。\n浑身疼，嗓子疼，痰多，咳嗽，头疼，浑身没劲，鼻子不透气，要多难受有多难受','','','','',69307,1516982400,0),(74,'indexdb','','https://developer.mozilla.org/zh-CN/docs/Web/API/IndexedDB_API/Using_IndexedDB','','','','',64577,1517414400,0),(75,'sone','','脑子迟钝，精神萎靡不振，两眼无光，没精打采，活像一个丧尸','','','','',35303,1517500800,0),(76,'xml','','https://stackoverflow.com/questions/13979582/php-simplexml-decoding-entities-in-cdata','','','','',37374,1517500800,0),(77,'es6','','https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Guide/Using_promises\nhttps://segmentfault.com/q/1010000009110592','','','','',62281,1517500800,0),(78,'google邮箱','','hellosonee@gmail.com','','','','',60894,1517846400,0);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-07 10:11:50


--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(64) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '密码',
  `ip` varchar(255) NOT NULL DEFAULT '' COMMENT 'ip',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT 0 '0启用 1禁用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
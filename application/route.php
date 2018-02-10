<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/**
 *
 *  路由定义规则
 * '路由表达式','路由地址','请求类型','路由参数（数组）','变量规则（数组）'
 *
 */
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
    '[time_line]' => [ //路由分组：允许把相同前缀的路由定义合并分组，这样可以提高路由匹配的效率，不必每次都去遍历完整的路由规则。
        //api
        'addArticle' => ['api/TimeLine/addArticle', ['method' => 'post']],//等价于：Route::rule('time_line/addArticle','api/TimeLine/addArticle');
        'getTimeLineData' => ['api/TimeLine/getTimeLineData', ['method' => 'get']],
        //machine 路由规则 =》 （路由地址）[模块/控制器/]操作?参数1=值1&参数2=值2...
        'machine' => ['index/timeLineMachine', ['method' => 'get']],
        //axis
        'index' => ['index/timeLineAxis', ['method' => 'get']],
        'getTimeLineList' => ['api/TimeLine/getTimeLineList', ['method' => 'get']],
        'getTimeLineDetail' => ['api/TimeLine/getTimeLineDetail', ['method' => 'get']]
        /**
         * 最常用的一种路由方式,路由到 模块/控制器/操作
         * 把满足条件的路由规则路由到相关的模块、控制器和操作，然后由App类调度执行相关的操作。
         * 同时会进行模块的初始化操作（包括配置读取、公共文件载入、行为定义载入、语言包载入等等）。
         * 路由地址的格式为：[模块/控制器/]操作?参数1=值1&参数2=值2...
         *
         * ***解析规则是从操作开始解析，然后解析控制器，最后解析模块***
         * ***即路由规则指向的地址模块和控制器是可选的，操作是必填的。路由地址如果没有填写模块或控制器，解析时会依次寻找系统默认的模块和控制器***
         *
         * 路由到默认或者绑定模块
         * 'blog/:id'=>'blog/read',
         * 路由到index模块
         * 'blog/:id'=>'index/blog/read',
         * 默认的模块是APP_PATH/config.php中的default_module,默认为index
         *
         * 使用url函数生成url地址时，要注意
         * ***生成方法的第一个参数必须和路由定义的路由地址保持一致***
         * eg.
         * 路由time_line/addArticle的生成方法应为：Url::build('api/TimeLine/addArticle'[,参数]);
         *
         * url方法生成url地址的讲解：
         * 1.直接使用模块/控制器/操作生成
         * 如果你的路由方式是路由到模块/控制器/操作，那么可以直接写
         *   // 生成index模块 blog控制器的read操作 URL访问地址
         *   Url::build('index/blog/read','id=5&name=thinkphp');
         * 2.直接使用路由规则 Url::build('/time_line/addArticle');
         */
    ]
];
/**
 * ***注意,在模板中使用tp的url助手函数时，要用原生的php代码写 即：<?php echo url('x/x')?>,不要用模板标签的方法写：<{url('x/x')}>，因为这样写不会解析***
 * 模板文件可以包含普通标签和标签库标签，标签的定界符都可以重新配置。
 *
 * 1、普通标签：用于变量输出和模板注释，普通模板标签默认以{ 和 } 作为开始和结束标识
 * 2、标签库标签（包括内置标签和导入某个标签库标签）：内置的模板引擎除了支持普通变量的输出之外，更强大的地方在于标签库功能。
 *      标签库类似于Java的Struts中的JSP标签库，每一个标签库是一个独立的标签库文件，标签库中的每一个标签完成某个功能，采用XML标签方式（包括开放标签和闭合标签）。
 */
<?php
return [
    // +----------------------------------------------------------------------
    // | 日志信息配置
    // | level：空则不记录 指定记录类型 ['debug', 'info', 'notice', 'warning', 'error', 'critical', 'alert', 'emergency']
    // | type: File->存入文件 Redis->存入redis MongoDB->存入MongoDB
    // | realtime: 实时写入 true->实时写入 false->先写入内存
    // | formatter：输出日志格式
    // |   ├─type:日志类型 line->字符串 html->html模式 json->json格式
    // |   ├─output:日志样式 datetime->时间戳 channel->频道名 level_name->日志等级 message->消息 context->关联数组
    // |   ├─date_format:时间样式格式
    // | drive:驱动
    // |   ├─name:类型名称 single->单文件模式 daily->每日递增模式
    // |   ├─path:File保存文件目录
    // |   ├─file_max:daily模式专用 最大文件保存数量 0不限制
    // |   ├─file_name:single模式专用 指定文件名称 未设置则使用渠道名称做文件名
    // +----------------------------------------------------------------------
    //
    'Denha' => [
        'type'      => 'File',
        'realtime'  => false, // 实时写入
        'level'     => ['debug', 'info', 'notice', 'warning', 'error', 'critical', 'alert', 'emergency'],
        'formatter' => [
            'type'        => 'line',
            'output'      => '[%datetime%] %channel%.%level_name% %message% %context% %extra%',
            'date_format' => 'Y-m-d H:i:s',
        ],
        'drive'     => [
            'name'      => 'daily',
            'path'      => DATA_RUN_PATH . php_sapi_name() . DS,
            'file_max'  => 0,
            'file_name' => '',
        ],
    ],
];

<?php
use denha\Route;

/** 以下是演示数据 正式使用请删除 Start */
Route::rule('/hello/world', function () {echo 'hello world';});
Route::rule('/home/hello/index', '/', ['old_uri_hide' => true]);
Route::rule('/home/hello/detail', '/detail', ['suffix' => '.html']);
/** 以上是演示数据 正式使用请删除 End */
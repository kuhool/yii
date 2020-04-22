<?php
/**
 * Yii bootstrap file.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright 2008-2013 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @package system
 * @since 1.0
 */

//检查类YiiBase是否存在，class_exists第二个参数不使用__autoload自动加载
if(!class_exists('YiiBase', false))
	require(dirname(__FILE__).'/YiiBase.php');

// require: dirname当前目录名加YiiBase类所在的文件
/**
 * Yii is a helper class serving common framework functionalities.
 *
 * It encapsulates {@link YiiBase} which provides the actual implementation.
 * By writing your own Yii class, you can customize some functionalities of YiiBase.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @package system
 * @since 1.0
 */
//这个你可以重新YiiBase中的方法，达到个性化定制的需求
class Yii extends YiiBase
{
}

<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H6wpTI_Ur01Rn@~_.64g]bz#t3 I*#AHtW$w`9l2lZ~*Z[m50*%OL/19/Re^|P?Q');
define('SECURE_AUTH_KEY',  '%{R4n{qP7|mPx,LJIrYO{v]1KU14,y)]Re;7YTi~mX`Sic7TZJ)vXl]#b51 AZFj');
define('LOGGED_IN_KEY',    'G}C!7~C0e%A#t 5=Z]wwsA-jU38pZb?cbpJU@ciZ_QR,8Z$XR9G1;~u|[lA$rViE');
define('NONCE_KEY',        'R=8}rVvD`Sm]snBiL(9i5wdreqa~FZv:RAR.>LAH3Eo-DkQl&D1r~fx3lUAgQ/ s');
define('AUTH_SALT',        '%7Ww&E byuCzF=k*9#>vo%ckD^s>}|B-wc)]u!P`B=Q_ /m79Iv>n#h)UM#A$-Rp');
define('SECURE_AUTH_SALT', '#C@Zd+7-6APuVRi6SVL?q6vJ_D6%W(>)E;GT((H6$$hQ9~^v_a|/P(xw:|;th(&t');
define('LOGGED_IN_SALT',   'zt9 lzp/+`zocO1]<+u:0?xQsQcEYo%cJGo^eY;XC(ySky2J)ab?c ip_[D0TUe*');
define('NONCE_SALT',       'C+]J0n?,Fv?Rva[5`>~q6JTh;gx|E`%d<jmcL9iqdr}2Ag$H:|INya:{jG%Tzc&F');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

define("FS_METHOD","direct");

define("FS_CHMOD_DIR", 0777);

define("FS_CHMOD_FILE", 0777);
/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');


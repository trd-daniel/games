<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'games');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'trscebu123');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sH8!/^mNsLXr,J)e 3&t{V+,8yJ/dFFD;}?%jJR`ILaCvVgo.CG-SrkA|pU}rG}k');
define('SECURE_AUTH_KEY',  'c:dJ+Wp$hoI%T)`$f|yN[uV1P1s~oe)Mi;SIw9~hRl,l^$`@a7B7P648<eEoG|u~');
define('LOGGED_IN_KEY',    'y*imM,7WOoMK0MD(ti0I3/:tLC$w4-Drzr.E|9@Py0GA%2vGyB5C:>D0-iD-Qqeg');
define('NONCE_KEY',        'Sn&+6R.e|4&6-8.3=,-*L5Gy-2c]5)+yz[m6jOz U:gVWR%/R_8u+A]UKFE|.m<S');
define('AUTH_SALT',        '*W{+nN>Pe@ywplLx!;k]4NTfA71^8PTbAz,V.dG;pYjj9?i<gcEMAYz|kE1B]7!/');
define('SECURE_AUTH_SALT', '|.ZKJF`_~>w+C#.CQg}@C &&OMW]$`*@}&nYKyx0M1DQXdcft2r_5hN~Qh+_{EWc');
define('LOGGED_IN_SALT',   'qI935[a:ZZ/1_[0!2f$o1>z>XIYR(8[l`PM)bGXL<G^C5k(pLUk91&Nmjgv* lh7');
define('NONCE_SALT',       ':T-}dSj$l`F8Y[<hxf6/aMq3#G.T(AA<3|wUPP;_P??prllmJ pW-^.qWe-kpmCN');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

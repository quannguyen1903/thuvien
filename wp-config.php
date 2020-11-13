<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'thuvien' );

/** Username của database */
define( 'DB_USER', 'thuvien' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '0334512435quan' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+]VTAu^K^/R.tM`FD5nc(Jb+H04@6d,y9L2c4>A-b.&Gh^(ZKY/<q+,pPg`bZ/qe' );
define( 'SECURE_AUTH_KEY',  '.Nk/oZI`CcY;F:3eD3qR.kAjV%2<67o3744k^!X+^DV;|bd;Q6vZ;]5W8nubE8 [' );
define( 'LOGGED_IN_KEY',    'c?O~eYL9^.R_jhwG3am&; $O9vJA-?]rx&$J|M#xDFT%6 YwSF^4S*H}d/tODLZN' );
define( 'NONCE_KEY',        'VI(:@Xm,{SJuW#?`r)Jk9,I_`lc8[V_6=%jW4 HFh7ojfpY#T}qti;4is$p{?O2C' );
define( 'AUTH_SALT',        'RTsp85[<mrk+Q%G,5jxfprDW`r{MUEE%fcWsB)>de^=}K[=@#3D{nBZbV81]DkC1' );
define( 'SECURE_AUTH_SALT', 'h8K_?VT/Vz8!kU;Q*U0P^o1GT>?Vxpi8hec&P/MnnQb,AK0?X#;P);kS}$SmK@=e' );
define( 'LOGGED_IN_SALT',   'wi[nVLMT%Remc+P(fR(@2CE&,i4we(wNV<68{OBQ<2G9 $j+5 Xl:7p^Uc3Po|ks' );
define( 'NONCE_SALT',       'i+jgO>F4rOK-ed,Fc}7aaHW}K$:_%XDAM@p)RBtWm/.BeNo RFkaI>~PQv[4dZmF' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'tp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

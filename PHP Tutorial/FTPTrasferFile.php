$ftp_host = ''; /* host */
$ftp_user_name = ''; /* username */
$ftp_user_pass = ''; /* password */ 
/* Connect using basic FTP */
$connect_it = ftp_ssl_connect( $ftp_host);
 
/* Login to FTP */
$login_result = ftp_login( $connect_it, $ftp_user_name, $ftp_user_pass );


$local_file = "csv-store/".$file;

$server_file = "/".$file;


ftp_pasv($connect_it, true) or die("Unable switch to passive mode");

$test = ftp_put($connect_it, $server_file,$local_file, FTP_ASCII); // transfer from local  to server ftp

ftp_close( $connect_it );
<?php
class SFTPConnection
{
    private $connection;
    private $sftp;

    public function __construct($host, $port=22)
    {
        $this->connection = @ssh2_connect($host, $port);
        if (! $this->connection)
            throw new Exception("Could not connect to $host on port $port.");
    }

    public function login($username, $password)
    {
        if (! @ssh2_auth_password($this->connection, $username, $password))
            throw new Exception("Could not authenticate with username $username " .
                                "and password $password.");

        $this->sftp = @ssh2_sftp($this->connection);
        if (! $this->sftp)
            throw new Exception("Could not initialize SFTP subsystem.");
    }

    public function uploadFile($local_file, $remote_file)
    {
        $sftp = $this->sftp;
        $stream = @fopen("ssh2.sftp://$sftp$remote_file", 'w');

        if (! $stream)
            throw new Exception("Could not open file: $remote_file");

        $data_to_send = @file_get_contents($local_file);
        if ($data_to_send === false)
            throw new Exception("Could not open local file: $local_file.");

        if (@fwrite($stream, $data_to_send) === false)
            throw new Exception("Could not send data from file: $local_file.");

        @fclose($stream);
    }
}

try
{
    $sftp = new SFTPConnection("Host_name", 22);
    $sftp->login("Username", "Password");
    $sftp->uploadFile("csv-store/".$file, "/".$file);// (local-File-Location , Upload-Server-File-Location)
}
catch (Exception $e)
{
    echo $e->getMessage() . "\n";
}

/*

To use ssh2 we need to install ssh2 extention for php 
CentOS 6.4 - Install SSH2 extension for PHP

1) Install the necessary packages before you can build/install ssh2 extension

yum install gcc php-devel php-pear libssh2 libssh2-devel make

2) Install the extension, (hit enter for autodetect when it prompts you)

pecl install -f ssh2

3) Once the install is completed, you just have to tell PHP to load the extension when it boots.

echo extension=ssh2.so > /etc/php.d/ssh2.ini

4) Restart your webserver and test to see if the changes took effect.

service httpd restart

5) You can check it installed with the following command

php -m | grep ssh2


*/

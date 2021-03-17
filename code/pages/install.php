<?php include BASE . "components/head.php";

$servername = @$_POST['db_host'];
$username = @$_POST['db_username'];
$password = @$_POST['db_password'];
$dbname = @$_POST['db_name'];
$debug = @$_POST['debug_mode'];
$url = @$_POST['site_url'];
$settings = $_POST;

if (
    !empty($servername) &&
    !empty($username) &&
    !empty($password) &&
    !empty($dbname)
) {
    include BASE . "classes/DB.php";
    $db_handler = new DB($servername, $username, $password, $dbname);
    
    $schema_file = fopen(BASE . 'schema.sql', 'r');
    $sql = '';
    echo '<pre>';
    while(!feof($schema_file)) {
        $line = explode(';', fgets($schema_file));
        $sql .= $line[0];
        if (count($line) >= 2) {
            if ($sql !== '') {
                echo $db_handler->runQuery($sql) . PHP_EOL;
                if (!$db_handler->getStatus()) {
                    break;
                }
            }
            $sql = '';
        }
    }
    echo '</pre>';

    if ($db_handler->getStatus()) {
        $settings['install_timestamp'] = time();
        $settings['debug_mode'] = (@$settings['debug_mode'] === 'on');
        file_put_contents(CONFIG_FILE, json_encode($settings, JSON_PRETTY_PRINT));
        header('Location: ' . $_SERVER['REQUEST_URI']);
    }
}
?>
<title>Installation page</title>

<?php if (isset($error)):?>
    <div class="error">
        <p><?=$error?></p>
    </div>
<?php endif;?>

<div class="conatiner-middle">
    <form action="" method="post">
        <div>
            <label for="usrname">DB Username</label>
            <input type="text" name="db_username" id="usrname" value="<?=$username;?>" required>
        </div>
        <div>
            <label for="pswrd">DB password</label>
            <input type="password" name="db_password" id="pswrd"  value="<?=$password;?>">
        </div>
        <div>
            <label for="dbname">DB name</label>
            <input type="text" name="db_name" id="dbname" required value="<?=$dbname;?>">
        </div>
        <div>
            <label for="host">DB host</label>
            <input type="text" name="db_host" id="host" required value="<?=$servername;?>">
        </div>
        <hr>
        <div>
            <label for="site_url">Site Url</label>
            <input type="text" name="site_url" id="site_url" required value="<?=$url;?>">
        </div>
        <div>
            <label for="debug_mode">Debug mode</label>
            <input type="checkbox" name="debug_mode" id="debug_mode" <?php $debug && print('checked');?>>
        </div>

        <button type="submit">Install</button>
    </form>
</div>
class db {
    public static function dbFactory($host, $dbase, $user, $pass) {
        $pdo = new PDO("mysql:host=$host;dbname=$dbase", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }
}
$con = db::dbFactory('localhost','mydbname','myusername','mypassword');

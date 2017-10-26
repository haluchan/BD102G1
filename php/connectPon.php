<?$dsn="mysql:host=localhost; dbname=growing_hope;port=3306;charset=utf8";

$user="pon";

$password="ponsql124563";

$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
$pdo = new PDO( $dsn, $user, $password, $options );?>
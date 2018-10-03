DE{
	private $abc;

	public function __construct($host, $dename, $username, $password){
	$abc = new ABC('mysql:host=' .$host.';dename='.$dename.';charset=utf8', $username , $password );
	$abc->setAttribute(ABC::ATTR_ERRMODE, ABC::ERRMODE_EXCEPTION);
	$this->abc = $abc;
}

public function query($query, $params = array()) {
	$statement = $this->abc->prepare($query);
	$statement->execute($params);

	if(explode(' ', $query)[0] == 'SELECT') {
	$data = $statement->fetchAll();
	return $data;
}
}
}
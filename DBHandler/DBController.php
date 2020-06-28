<?php
class DBController
{
    private $DBController = null;
    private $DATABASE_HOST = 'localhost';
	private $DATABASE_USER = 'root';
    private $DATABASE_PASS = '';
    private $DATABASE_NAME = 'tmaker';
    private $stmt = null;
    public function __construct()
    {
        $this->DBController = new mysqli($this->DATABASE_HOST, $this->DATABASE_USER, $this->DATABASE_PASS, $this->DATABASE_NAME) or die("Fucked kid");
    }
    public function query($sql)
    {
        return $this->DBController->query($sql);
    }

    public function addUser($name, $password, $email)
    {
        $stmt = $this->DBController->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("sss", $name, $hashedPassword, $email);
        try {
            $stmt->execute();
        } catch (\Exception $e) {
            echo "<p>Issue With Insert.<\p>";
        }
    }
    public function checkLogIn($username)
    {
        $stmt = $this->DBController->prepare("SELECT id__, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        if (!empty($stmt) && $stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            if (password_verify($_POST['password'], $password)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
	public function doesExist($name){
		$stmt = $this->DBController->prepare("SELECT id__ FROM users WHERE username = ?");
		$stmt->bind_param("s", $name);
		$stmt->execute();
		$stmt->store_result();
		if (!empty($stmt) && $stmt->num_rows > 0) 
		{
			return true;
		} else
		{
			return false;
		}
	}
	
	public function getID($name){
		$id = 0;
		$stmt = $this->DBController->prepare("SELECT id__ FROM users WHERE username = ?");
		$stmt->bind_param("s", $name);
		$stmt->execute();
		$stmt->store_result();
		if (!empty($stmt) && $stmt->num_rows > 0) {
			$stmt->bind_result($id);
			 $stmt->fetch();
			return $id;
		}else{
			return 5;
			
		}
	}
	public function setPref($id, $cat, $colour, $size)
	{
		$stmt = $this->DBController->prepare("INSERT INTO prefernces (id__, category, colors, size) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $id, $cat, $colour, $size);
        try {
            $stmt->execute();
        } catch (\Exception $e) {
            echo "<p>Issue With Insert into.<\p>";
        }
	}
	public function getAllMaleProducts(){
		$stmt = $this->DBController->prepare("SELECT id__, name, price, category, imagePath  FROM products WHERE gender = 'M' GROUP BY name");
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->fetch_all(MYSQLI_ASSOC);
	}
		
	public function getAllFemaleProducts(){
		$stmt = $this->DBController->prepare("SELECT id__, name, price, category, imagePath  FROM products WHERE gender = 'F' GROUP BY name");
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->fetch_all(MYSQLI_ASSOC);
	}

	public function getProduct($id){
		$stmt = $this->DBController->prepare("SELECT * FROM products WHERE id__ = ?");
		$stmt->bind_param("i", $id);	
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->fetch_all(MYSQLI_ASSOC);
	}
	public function getProductSizes($name){
		$stmt = $this->DBController->prepare("SELECT size FROM products WHERE name = ?");
		$stmt->bind_param("s", $name);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->fetch_all(MYSQLI_ASSOC);
	}
	
		public function getProductTotalStock($name){
		$stmt = $this->DBController->prepare("SELECT SUM(stock) FROM products WHERE name = ?");
		$stmt->bind_param("s", $name);
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->fetch_all(MYSQLI_ASSOC);
	}
}

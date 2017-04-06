<?PHP
	/**
	* registration DKM manager
	*/
//	include "loader/db.php";
	//include "config.php";
	/**
	*
	*/
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'tesis_iot');

	class Connection
	{
		public $db;
		public function __construct(){
			$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
			if ($conn->connect_errno) {
				printf("Couldn connect to database: %s\n", $conn->connect_error);
				die();
			}else{
				$this->db = $conn;
			}
			// echo "sukses";
		}
	}

	class User extends Connection {
		//public $db;
		private $_table = 'user';
		private $_id = 'id';
		private $_dataRoot = 'data_root1';
		private $_UserID = 'user_id';
		private $_tAdmin = 't_admin';
		function __construct(){
			parent::__construct();
		}

		/** registration admin DKM**/
		public function reg_device($name,$username,$email,$passwordLogin){
			//$password = md5($password);
			$sql = "SELECT * FROM $this->_table WHERE email='$email' OR username='$username'  ";
			//check available email or username
			$check = $this->db->query($sql); //process query into database
			$count_row = $check->num_rows;

			//if email available then insert into database
			if ($count_row == 0) {
				$sql1 = "INSERT INTO $this->_table SET name='$name',email='$email',password='$passwordLogin',username='$username' ";
				$result = $this->db->query($sql1) or die(mysqli_connect_errno(). "Failed Registration");
				return $result;
			}else{
				return false;
			}
		}

		// function check login
		public function check_login($username, $passwordLogin){

			//$passwordLogin = md5($passwordLogin);
			$login="SELECT $this->_id FROM $this->_table WHERE password='$passwordLogin' AND username='$username' ";

			//checking if the username is available
			$result = $this->db->query($login);
			//var_dump($login);
			//exit ;
			//if ($result == true ) {
			$user_data = $result->fetch_assoc();
			//}
			//$user_data = $result->fetch_assoc();
			$count_row = $result->num_rows;
				//var_dump($user_data);
			if ($count_row > 0) {
				$_SESSION['login'] = true;
				$_SESSION['id'] = $user_data['id'];
				return true;
			}else{
				return false;
			}

		}

		//take name or all data from user
		public function get_data($id){
			$query="SELECT * FROM $this->_table WHERE $this->_id='$id' ";
			$result = $this->db->query($query);
			//$result=mysqli_query($this->db,$query);
			$user_data=$result->fetch_object();
			//echo $user_data['nama'];
			//var_dump($user_data);
			return $user_data;
		}
		// session
		public function get_session(){
			return $_SESSION['login'];
		}
		public function user_logout(){
			$_SESSION['login'] = FALSE;
			session_destroy();
		}
		public function get_user_data($id){
			$result = $this->db->query("SELECT * FROM $this->_dataRoot WHERE id='$id' ");
			$no = 1;
			while ($show = $result->fetch_array()) {
				echo "<tr>";
				echo "<td>".$no++."</td>";
				echo "<td>".$show['id']."</td>";
				echo "<td>".$show['logdata']."</td>";
				echo "<td>".$show['pir']."</td>";
				echo "<td>".$show['gas']."</td>";
				echo "<td>".$show['temp']."</td>";
				echo "<td>".$show['hum']."</td>";
				echo "</tr>";
				//echo "<td><a href='tel://".$show['no_hp']." '> ".$show['no_hp']."</a></td>";
				//echo "<td>".$show['gcm_registration_id']."</td>";
				
			}
		}

	}



?>

<?php 

include_once("config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=:id";

$prep = $conn->prepare($sql);

$prep->bindParam(':id', $id);

$prep->execute();

$data = $prep->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>

	<style>
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #e0eafc, #cfdef3);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    background: #ffffff;
    border-radius: 15px;
    padding: 30px 25px;
    width: 400px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    display: flex;
    flex-direction: column;
    gap: 20px;
    box-sizing: border-box;
}

form > input {
    padding: 15px 20px;
    font-size: 18px;
    border: 2px solid #dcdcdc;
    border-radius: 10px;
    outline: none;
    transition: all 0.3s ease;
    background: #f9f9f9;
}

form > input:focus {
    border-color: #4caf50;
    background: #ffffff;
    box-shadow: 0 0 10px rgba(76, 175, 80, 0.5);
}

button {
    background: linear-gradient(90deg, #43a047, #66bb6a);
    border: none;
    border-radius: 10px;
    padding: 15px;
    font-size: 18px;
    font-weight: bold;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

button:hover {
    background: linear-gradient(90deg, #388e3c, #43a047);
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(67, 160, 71, 0.4);
}

button:active {
    transform: translateY(1px);
    box-shadow: none;
}

form > input::placeholder {
    color: #b0b0b0;
    font-style: italic;
}


@media (max-width: 600px) {
    form {
        width: 90%;
        padding: 20px;
    }

    button {
        font-size: 16px;
        padding: 12px;
    }
}
.dashboard-link {
    position: absolute; 
    top: 20px; 
    right: 20px;
    font-size: 14px;
    text-decoration: none;
    color: #4caf50;
    font-weight: bold;
    transition: color 0.3s ease;
}

.dashboard-link:hover {
    color: #388e3c;
}

	</style>
</head>
<body>
	
	<form action="update.php" method="POST">
	<input type="number" name="id"  value="<?php echo $data['id']?>" readonly><br>
    <input type="text" name="username" value="<?php echo $data['username']?>"><br>
    <input type="text" name="name" value="<?php echo $data['name']?>"><br>
    <input type="text" name="surname" value="<?php echo $data['surname']?>"><br>
    <input type="email" name="email" value="<?php echo $data['email']?>"><br>

		<br><br>
		<button type="submit" name="update">UPDATE</button>
       
	</form>
    <a href="dashboard.php" class="dashboard-link">Dashboard</a>
	</body>
</html>


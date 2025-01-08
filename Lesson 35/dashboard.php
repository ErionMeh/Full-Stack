<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #4caf50; /* Green background */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    font-family: Arial, sans-serif;
}


.navbar-brand {
    font-size: 24px;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
}


.navbar-links {
    display: flex;
    list-style: none;
    gap: 20px;
    margin: 0;
    padding: 0;
}


.navbar-links a {
    text-decoration: none;
    color: white;
    font-size: 16px;
    transition: color 0.3s ease;
}

.navbar-links a:hover {
    color: #d4f0d9; 
}



table {
    border: 1px solid #ddd;
    border-collapse: collapse;
    width: 100%;
    margin: 20px auto;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    font-size: 16px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    border-radius: 8px; 
    overflow: hidden;
}


th {
    background: linear-gradient(to right, #4CAF50, #3E8E41);
    color: white;
    text-transform: uppercase; 
    padding: 15px;
    text-align: center;
    font-weight: bold;
    letter-spacing: 1px;
}


td {
    padding: 12px 15px;
    color: #333;
    text-align: center;
}


tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:nth-child(odd) {
    background-color: #ffffff;
}


tr:hover {
    background-color: #f1f1f1; 
    transform: scale(1.01); 
    transition: all 0.2s ease-in-out;
}


tr, th, td {
    border: 1px solid #ddd;
}


@media (max-width: 768px) {
    table {
        font-size: 14px; 
    }
    td, th {
        padding: 10px;
    }
}


	</style>
</head>
<body>


	<?php 

		include_once('config.php');

		$getUsers = $conn->prepare("SELECT * FROM users");

		$getUsers->execute();

		$users = $getUsers->fetchAll();

	 ?>

<nav class="navbar">
    <div class="navbar-brand">DB</div>
    <ul class="navbar-links">
        <li><a href="index.php">Add User</a></li>
        <li><a href="logout.php">Log Out</a></li>
    </ul>
</nav>

	 <table>
		<thead>
			
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Update</th>
			</tr>
	</thead>


	 	<?php 

	 		foreach ($users as $user ) {
			
		?>
			<tr> 
				<td> <?= $user['id'] ?> </td>
				<td> <?= $user['username'] ?> </td>
				<td> <?= $user['name']  ?> </td> 
				<td> <?= $user['surname']  ?> </td> 
				<td> <?= $user['email']  ?> </td>
				<td> <?= "<a href='delete.php?id=$user[id]'> Delete</a>| <a href='edit.php?id=$user[id]'> Update </a>"?></td>

			</tr>
		
		<?php 

			}

	 	 ?>


	 </table>
	
</body>
</html>
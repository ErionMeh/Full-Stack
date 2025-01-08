<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>

/* Form Styling */
form {
    width: 100%;
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background: #ffffff; /* Clean white background */
    border-radius: 15px; /* Smooth rounded corners */
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Elegant shadow */
    font-family: "Poppins", sans-serif;
}

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #f0f4f8, #d9e4f5);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

form {
    background: #fff;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    padding: 20px;
    width: 350px;
    display: flex;
    flex-direction: column;
    gap: 15px;
    box-sizing: border-box;
}

form > input {
    padding: 12px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

form > input:focus {
    border-color: #4caf50;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
}

button {
    background: linear-gradient(90deg, #43a047, #66bb6a);
    border: none;
    border-radius: 8px;
    padding: 12px;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    cursor: pointer;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

button:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 10px rgba(67, 160, 71, 0.4);
}

button:active {
    transform: scale(0.98);
    box-shadow: 0 2px 6px rgba(67, 160, 71, 0.4);
}


	</style>
</head>
<body>
	
	<form action="add.php" method="POST">
		
		<input type="text" name="username" placeholder="Username"><br>
		<input type="text" name="name" placeholder="Emri"><br>
		<input type="text" name="surname" placeholder="Mbiemri"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<input type="email" name="email" placeholder="Email"><br><br>
		<button type="submit" name="submit">Add</button>

	</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Sample Webpage</title>
<style>
  h1 {
    text-align: center;
  }

  body {
    font-family: 'Arial', Sans-Serif;
    background-color: #F0F8FF;
  }

  table {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  table {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 60%;
    width: 60%;
    margin-top: 50px;
  }

  /* This will center the table on the page */

  header {
    background-color: #1AA7EC;
    color: #1AA7EC;
    padding: 10px;
  }

  nav ul {
    margin: 0;
    padding: 0;
    list-style: none;
    position: relative;
    float: left;
  }

  nav ul li {
    display: inline-block;
    background-color: #1AA7EC;
  }

  nav a {
    display: block;
    padding: 0 10px;
    color: black;
    font-size: 18px;
    line-height: 60px;
    text-decoration: none;
  }

  nav ul ul {
    display: none;
    position: absolute;
    top: 60px;
  }

  nav ul li:hover>ul {
    display: inherit;
  }

  nav ul ul li {
    width: 200px;
    float: none;
    display: list-item;
    position: relative;
    background-color: #333;
  }

  nav ul ul ul li {
    position: relative;
    top: -60px;
    left: 200px;
  }

  nav li:hover {
    background-color: #2c3e50;
  }

  nav a:hover {
    color: #fff;
  }

  table {
  width: 80vw;
  height: 40vh;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

button {
  width: 20vw;
  height: 10vh;
  background-color: #1AA7EC;
  border-style: solid;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  border: black;
  color:black;
  padding: 2vh 5vw;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 2.5vh;
  text-align: center;

}
<?php
session_start();
$_SESSION['Checker']=66;
if ($_SESSION['Checker']!=NULL){
    
echo"
</style>

</head>
<body>
    <h1> CARAPACHAIMA EAST STAFF</h1>
    <h2>Attendance Hub</h2>
	<main>
            <form method='post'>
		<table>
			<tr>
				<td><button type='submit'name='button1'>View Records</button></td>
				<td><button type='submit'button name='button2'>View Detailed Records</button></td>
				<td><button type='submit'button name='button3'>Mark Present</button></td>
			</tr>
			<tr>
				<td><button type='submit'button name='button4'>Mark Late</button></td>
				<td><button type='submit'button name='button5'>View Flagged Students</button></td>
				<td><button type='subumit'button name='button6'>LOG OUT</button></td>
			</tr>
		</table>
                </form>
	</main>
</body>"
;

if (isset($_POST['button1'])){
    
    echo"Button 1 Pressed";
    
}
if (isset($_POST['button2'])){
    
    echo'Button 2 Pressed';
    
}
if (isset($_POST['button3'])){
    
    echo'Button 3 Pressed';
    
}
if (isset($_POST['button4'])){
    
    echo'Button 4 Pressed';
    
}
if (isset($_POST['button5'])){
    
    echo'Button 5 Pressed';
    
}
if (isset($_POST['button6'])){
    
    echo"Button 6 Pressed";
   //header('Location:http://localhost/PhpProject2/index.php');
    
}
} 

echo"</html>";

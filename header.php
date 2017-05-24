<?php
	session_start();
	if(isset($_POST["submit"])){
		if($_POST["submit"]=="logout"){
			session_destroy();
			session_start();
		}
	}

	$dbhandle = new SQLite3("database.db");
?>

<html>
	<head>
		<link href="main.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
            <div class="pageWrapper">
                <header>
                    <nav>
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        <a href="#">Link 4</a>
                    </nav>
                    <?php
                            if(isset($_SESSION["username"])){
                                    echo '<div class="logout">Hallo '.$_SESSION["username"].'<br><form method="post" action=""><input name="submit" type="submit" value="logout"/></form></div>';
                            }
                            else{
                                    echo '<form method="post" action="">';
                                    echo '<label>Benutzername: </label><input type="text" name="ausername" required /><br>';
                                    echo '<label>Passwort: </label><input type="password" name="apassword" required /><br>';
                                    echo '<label>Mitarbeiterlogin</label><input type="checkbox" name="mitarbeiter" value="mitarbeiter" />';
                                    echo '<input type="Submit" value="Login" /> </form>';
                            
                            if(isset($_POST["ausername"])){
                                    if(isset($_POST['mitarbeiter'])){
                                            $loginTable = "Mitarbeiter";
                                    }
                                    else{
                                            $loginTable = "Kunde";
                                    }
                                    $result = $dbhandle->query("Select username, passwort From ".$loginTable." Where username = ".$_POST['ausername'].";");
                                    if(!$result){
                                            echo "name nicht gefunden";
                                    }
				    else{
                                    while ($entry = $result->fetchArray(SQLITE3_ASSOC)){
                                            if($entry["passwort"]==$_POST["apassword"]){
                                                    echo "pw richtig";
                                            }
                                            else{
                                                    echo "pw falsch";
                                            }
                                    }
				}
                            }
			    }
                    ?>
                </header>
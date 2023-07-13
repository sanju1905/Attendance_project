<?php
$icsename = $_POST['name'];
$pass1 = $_POST['pass'];


// if ($icsename === 'Seshu' && $pass1 === '123') {
//     header("Location: ./I_CSE/adminicsefetchdata.php");
// } else {
//     header("Location: admin.php?error=Incorect User name or password");
// }

// if ($icsename === 'Mahendra' && $pass1 === '456') {
//     header("Location: ./II_CSE/admin2csefetchdata.php");
// } else {
//     header("Location: admin.php?error=Incorect User name or password");
// }

// if ($icsename === 'Chandra' && $pass1 === '101') {
//     header("Location: ./IV_CSE/admin4csefetchdata.php");
// } else {
//     header("Location: admin.php?error=Incorect User name or password");
// }

// if ($icsename === 'Niranjan' && $pass1 === '789') {
//     header("Location: ./III_CSE/admin3csefetchdata.php");
// } else {
//     header("Location: admin.php?error=Incorect User name or password");
// }
$name = $_POST['name'];
$pass = $_POST['pass'];

switch (true) {
    case ($name == 'Seshu' && $pass == 'small'):
        header("Location: ./I_CSE/adminicsefetchdata.php");
        break;
    case ($name == 'Mahendra' && $pass == 'medium'):
        header("Location: ./II_CSE/admin2csefetchdata.php");
        break;
    case ($name == 'Niranjan' && $pass == 'large'):
        header("Location: ./III_CSE/admin3csefetchdata.php");
        break;
    case ($name == 'Chandra' && $pass == 'high'):
        header("Location: ./IV_CSE/admin4csefetchdata.php");
         break;
    case ($name == 'Akshaya' && $pass == '1905'):
        header("Location: login.php");
         break;
    default:
        header("Location: admin.php?error=Incorect User name or password");  
        break;
}


?>
<?php
/**
 * Created by PhpStorm.
 * User: CatMiller
 * Date: 9/1/2016
 * Time: 7:02 PM
 */

if(!$user->is_logged_in()){ header('Location: login.php'); }
?>

<h2>Member only page</h2>

<p><a href='logout.php'>Logout</a></p>
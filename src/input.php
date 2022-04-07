<?php
    $my_name = isset($_POST['name']) ? $_POST['name'] : '';
?>

<h1>What's Your Name</h1>

<form action="<?= $_SERVER["PHP_SELF"]?>" method="POST">
    <label for="name" id="name">Name</label>
    <br/>
    <input type="text" name="name" placeholder="enter your name here" 
    value="<?= htmlentities($my_name) ?>"/>
    <button type="submit">Submit</button>
</form>

<pre>
    <?= 
    print_r($_POST); 
    //print_r($GLOBALS);
    ?>
</pre>
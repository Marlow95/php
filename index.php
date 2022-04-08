<h1>Testing DB</h1>
<div>
    <?php
        $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=testdb;';
        $user = 'marlowc';
        $pass = '';
        $pdo = new PDO($dsn, $user, $pass);

        //UnitTest exception & succesfor nonsense data
        //Will finish setup later for an integration test

        try{
            echo('<h5>' . "Connection Open" . '</h5>'); 
            $stmt =  $pdo->query('SELECT * FROM Users');
            foreach($stmt as $data) print_r($data['UserName'] . "</br>");

        } catch(PDOException $e){
    
            echo($e->getMessage());
        }

    
    ?>
</div>
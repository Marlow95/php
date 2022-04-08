<h1>Testing DB</h1>
<div>
    <?php
        try{

            $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=testdb;');
            $stmt = $pdo->query("SELECT * FROM Users");

            while($row = $pdo->fetch(PDO::FETCH_ASSOCIATE)){
                print_r($row);
            }
            
        } catch(PDOException $e){
    
            echo $e->getMessage();
        }
    
    ?>
</div>
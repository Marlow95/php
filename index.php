<h1 style="text-align: center;">Testing DB</h1>
<div>
    <div style="text-align: center;">
        <?php
            $host = '127.0.0.1';
            $port = '3306';
            $dbname = "testdb";
            $dsn = 'mysql:host=' . $host . ';port=' . $port. ';dbname=' . $dbname . ';';
            $user = 'marlowc';
            $pass = '';
            
            //UnitTest exception & success for nonsense data
            //Will finish setup later for an integration test

            try{
                $pdo = new PDO($dsn, $user, $pass);
            } catch(PDOException $e){
                echo $e->getMessage();
                echo "<h2>Status</h2>";
                echo '<h5 style="color: red">' . 'Connection Failed' . '</h5>';
                exit;
            }
            
            echo '<h2>Status</h2>';
            echo('<h5 style="color: green">' . "Connection Open" . '</h5>'); 

        ?>
    </div>
    
    <div style="text-align: center;">
        <?php
            //This func selects all SQL columns in the table name you input. 
            //$table queries are just the name of the SQL columns you want to print.
            function print_query_data($table, $table_query1, $table_query2){

                global $pdo;
                try {
                    //Formated for reusabilty. $table is the table being selected.
                    $sql_data =  $pdo->query('SELECT * FROM ' . $table);
                } catch(Exception $e){
                    echo "<h5 style=\"color: red\">" . "Can't Query Data </h5>";
                    exit;
                }

                foreach($sql_data as $data){
                    //The table query parameters print SQL Columns in HTML Tables. 
                    //Input the name of the SQL column you want printed.
                    print_r(
                        "<tr>".
                        "<td>" . $data[$table_query1] . "</td>". '<td>'. $data[$table_query2] . "</td>"
                        ."</tr>"
                    ); 
                }
            }

            function find_out_name($number){
                //Searches for name by id
                try{
                    global $pdo;
                    $data = $pdo->prepare('SELECT * FROM Users WHERE UserID = ?');
                    $data->bindParam(1, $number, PDO::PARAM_INT);
                    $data->execute();
                } catch(Exception $e){
                    echo "<h5 style=\"color: red\">" . "Can't Query Data </h5>";
                    exit;
                }
            
                foreach($data as $row){
                    echo "Hello ";
                    print_r($row['FullName']);
                }
            }
            find_out_name(3)
        ?>
    </div>

    <div style="text-align: center;">
        <h2>All Customers</h2>
            <table style="display: flex; justify-content: center; text-align: center">
                <th>Name</th>
                <th>UserName</th>
                <?= print_query_data('Users', 'FullName', 'UserName'); ?>
            </table>
    </div>
</div>






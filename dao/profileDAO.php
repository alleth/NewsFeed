<?php
    include 'BaseDAO.php';

    class profileDAO extends BaseDAO{



        function viewProfile($Username){

            $this->openConn();
            $stmt = $this->dbh->prepare("SELECT * FROM List_of_Account WHERE Username = ?");
            $stmt->bindParam(1, $Username);
            $stmt->execute();

            while($row = $stmt->fetch()){

                echo "<tr id = ".$row[0].">";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "<td>".$row[6]."</td>";
                echo "<td>".$row[7]."</td>";
                echo "<td>".$row[8]."</td>";
                echo "<td>".$row[9]."</td>";
                echo "<td><img class = 'icon-pencil' title='Edit this'></td>";
                echo "</tr>";


            }




            $this->closeConn();




        }


    }


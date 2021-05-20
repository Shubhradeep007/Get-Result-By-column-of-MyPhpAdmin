<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<div class="contaner">
    <div class="row">
        <div class="col-md-12 my-2">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-tittle">fetch data</h4>
                        <div class="card-body">
                        <div class="row">
                        <div class="col-md-6">
                        <form action="result.php" method="POST">
                        <div class="from-group">
                        <input type="text" name="get_roll" class="form-control" placeholder="enter roll" required>
                        <button name="serach_by_id" type="submit" class="btn btn-primary my-2">Search</button>
                        
                        </div>
                        </form>
                        </div>
                        </div>
                        <?php 
                        include('db_connection.php');
                        if (isset($_POST['serach_by_id'])) 
                            # code...
                        
                        {
              
                            $roll = $_POST['get_roll'];
                            $query = "SELECT * FROM `result` where Roll= '$roll'";
                            $query_run = mysqli_query($conn, $query);
                            
                            if (mysqli_num_rows($query_run) > 0) 
                            {
                                while($row = mysqli_fetch_array($query_run))
                                {
                                    echo"<br><br><br>";
                                    echo
                                    "<center><h2>Name: $row[name]</h2></center>";
                                    echo "<center><h2>Roll: $row[Roll]</h2></center>";
                                    echo "<center><h2>Class: $row[class]</h2></center>";
                                    echo "<center><h2>Section: $row[section]</h2></center>";
                                    echo"
                                    <tr>
                                    <td> Bengali <br><br> English<br><br>Math<br><br>Science</td>    ";
                                    echo"<td>$row[Bengali] <br><br>$row[English]<br><br> $row[Math]<br><br> $row[Science]</td>";
                                    echo   " <td>$row[Bengali_grade] <br><br>$row[English_grade]<br><br> $row[Math_grade]<br><br>$row[Science_grade]</td>";
                                
                                    echo"</tr>";
                                    echo"<tr>
                                    <td>Total</td>
                                    ";
                                    echo"<td>$row[Marks]</td>";
                                }
                            }    
                            else
                            {
                                echo "No Data found";
                            }
                        }
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        ?>

                      




                        </div>
                
                
                </div>
            
            
            </div>
        
        
        </div>
    
    </div>


</div>





</body>
</html>
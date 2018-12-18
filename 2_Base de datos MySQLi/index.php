<!DOCTYPE HTML>
<html>
<head>
    <title>MySQLi - Read Records - PHP CRUD Tutorial</title>
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    .mt0{ margin-top:0; }
    </style>
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>Read Products</h1>
        </div>
     
        <?php
        // include database connection
        include 'database.php';
         
        $action = isset($_GET['action']) ? $_GET['action'] : "";
         
        // if it was redirected from delete.php
        if($action=='deleted'){
            echo "<div class='alert alert-success'>Record was deleted.</div>";
        }
         
        //guardamos el select en la variable sql
        $sql = "SELECT id, name, description, price 
                FROM products 
                ORDER BY id DESC";
        $select = $mysqli->query($sql, MYSQLI_USE_RESULT);
         
        // link to create record form
        echo "<a href='create.php' class='btn btn-primary m-b-1em'>Create New Product</a>";
         
            echo "<table class='table table-hover table-responsive table-bordered'>";//start table
             
                //creating our table heading
                echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Description</th>";
                    echo "<th>Price</th>";
                    echo "<th>Action</th>";
                echo "</tr>";
                 
                $stock = $select->fetch_array();
                //$stock = $fila;

                while($stock != null){
                    // creating new table row per record
                    echo "<tr>";
                        echo "<td>{$stock[0]}</td>";
                        echo "<td>{$stock[1]}</td>";
                        echo "<td>{$stock[2]}</td>";
                        echo "<td>&#36;{$stock[3]}</td>";
                        echo "<td>";
                            // read one record 
                            echo "<a href='read_one.php?id={$stock[0]}' class='btn btn-info m-r-1em'>Read</a>";

                            // we will use this links on next part of this post
                            echo "<a href='update.php?id={$stock[0]}' class='btn btn-primary m-r-1em'>Edit</a>";
                 
                            // we will use this links on next part of this post
                            echo "<a href='#' onclick='delete_user({$stock[0]});'  class='btn btn-danger'>Delete</a>";
                        echo "</td>";
                    echo "</tr>";

                    $stock = $select->fetch_array();
                }
             
            // end table
            echo "</table>";
             
        ?>
         
    </div> <!-- end .container -->
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
    <script type='text/javascript'>
    // confirm record deletion
    function delete_user( id ){
         
        var answer = confirm('Are you sure?');
        if (answer){
            // if user clicked ok, 
            // pass the id to delete.php and execute the delete query
            window.location = 'delete.php?id=' + id;
        } 
    }
    </script>
 
</body>
</html>
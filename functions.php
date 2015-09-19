

<?php

//  String Cutter
    function str_cut($str) {


        $var = substr($str,0,350);
        echo $var.".......";
    }
//  For selected query
    function post_query($col)
    {
        include 'conn.php';
//  Get the number of row of a table
        $sql = "SELECT count(id) FROM blog";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($query);

//  Catch the session variable from another page
        $n = $_SESSION['var'];
        for($i=1; $i<=$row[0]; $i++) {
            $sql = "SELECT * FROM blog where id = $n order by time asc";

//  For query
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($query);

            if($col == 'post_detail') {
                str_cut($row['post_detail']);
                break;

            }elseif($col == 'author') {
                echo $row['author'];
                break;

            }elseif($col == 'time') {
                echo $row['time'];
                break;

            }elseif($col == 'post_heading') {
                echo $row['post_heading'];
                break;

            }elseif($col == 'image') {
                echo $row['image'];
                break;
            }
            elseif($col == 'id') {
                echo $row['id'];
                break;
            }
        }

    }












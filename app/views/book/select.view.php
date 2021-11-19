
<html>
<table border=3>

<tr>

    <th>ID</th>
    <th>name</th>
    <th>category</th>
    <th>pages_num</th>
    <th>writer</th>
    <th>price</th>

</tr>



<?php

//use PHPMVC\models\BookController;
//$model=new Operation();

//var_dump($marwa);


//echo 'marea';


foreach($booksdata as $bookdata)
{
    echo"<tr>";
        echo "<td> {$bookdata['id']} </td>";
        echo "<td> {$bookdata['name']} </td>";
        echo "<td> {$bookdata['category']}  </td>";
        echo "<td> {$bookdata['pages_num']}     </td>";
        echo "<td> {$bookdata['writer']}  </td>";
        echo "<td> {$bookdata['price']}  </td>";
        echo "<td><a href='edit/{$bookdata['id']}'>Edit</a>  </td>";
        echo "<td><a href='delete/{$bookdata['id']}'>Delete</a>  </td>";

    echo"</tr>";

}

echo "</table>";

?>













</html>
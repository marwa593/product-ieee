<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/iee-task-2-edite.css"/>

  </head>
  <body>
<div class="container">
  <div class="add-form">
  
    <form target="" method="post" action="book/update">


    <ul>
    

       <li class="product-li">
    <input type="text" placeholder="BOOK NAME" name="name" value="<?php echo  $user['name']; ?> " class="text-center product-input">
  </li>



  <li  class="product-li">
  <input type="text" placeholder="BOOK CATEGORY" name="category" value="<?php echo  $user['category']; ?> " class="text-center product-input">
</li>


<li  class="product-li">
    <input type="number" placeholder="BOOK PAGES" name="pages_num" value="<?php echo  $user['pages_num']; ?>" class="text-center product-input">
  </li>



  <li  class="product-li">
    <input type="text" placeholder="BOOK AUTHOR" name="writer"  value="<?php echo  $user['writer']; ?> "class="text-center product-input">
  </li>


  <li  class="product-li">
    <input type="number" placeholder="price" name="price" value="<?php echo  $user['price'] ; ?>" class="text-center product-input">
  </li>




<li   class="product-li">
  <input type="submit" class="btn btn-danger add-botton "  name ="sub" value="edit your data">

</li>
</ul>
 
</form>
  
</div>
</div>
  </body>
</html>
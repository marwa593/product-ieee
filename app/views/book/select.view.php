
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <link rel="stylesheet" href="/css/iee-task-2.css"/>

  </head>
  <body>
    <section class="add-section">
      <div class="container">
    <a href="add" class="">
    <button class="btn btn-primary add-botton">
      add new item
    </button>
  </a>
</div>
</section>
<div class="container">
  <div class="row">
    <!-- card start-->
    
<?php foreach ($booksdata as $book_data) : ?>
  <div class="col-lg-6 col-md-12"> 
        <div class="product">
            <ul class="product-ul">

              <li class="product-li">
                id : <?php echo  $book_data['id']; ?>

                <span class="back-end-change">
                  
                </span> 
              </li>



              <li class="product-li">
                name : <?php echo  $book_data['name']; ?>

                <span class="back-end-change">
                  
                </span> 
              </li>


              <li  class="product-li">
                category :<?php echo  $book_data['category']; ?>
                <span class="back-end-change">
                  
                </span>


                <li  class="product-li">
                pages :<?php echo  $book_data['pages_num']; ?>
                <span class="back-end-change">
                  
                </span>
              
              <li class="product-li">
                author : <?php echo  $book_data['writer']; ?>
                <span class="back-end-change">
                  
                </span>
              </li>
            
              </li>
              <li  class="product-li">
                price :<?php echo  $book_data['price']; ?>
                <span class="back-end-change">
                  
                </span>
              </li>
              <li>
                <a href="edit/<?php echo  $book_data['id']; ?>" class="edite-link">
                  <button class="btn btn-primary edite" name="edite">
                  edite
                </button>
              </a>
              <a href="delete/<?php echo  $book_data['id']; ?>">
                <button class="btn btn-danger delete" name="delete">
                  delete
                </button>
              </a>
                <input type="checkbox" class="multi">
              </li>
            </ul>
            
        </div>
   </div>
 
   <?php endforeach ?>   
    <!-- card end-->






</html>
<?php
      $db = new mysqli("localhost", "admin", "1124", "blogcms");

   /*   if(isset($_GET['category'])){
        $category = mysqli_real_escape_string($db, $_GET['category']);
        $query = "SELECT * FROM posts WHERE category='$category'"; 
      }
else{*/
$query = "SELECT * FROM posts ";
$posts = $db->query($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Blog-Cms</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <?php if($categories->num_rows > 0){
       while($row = $categories->fetch_assoc()){
          ?>
        <a class="p-2 text-muted" href="index.php?categories=<?php echo $row['id']; ?>'"><?php echo $row['text'];?></a>
        <?php }} ?>
    
      </nav>
  </div>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Blog-cms</h1>
      <p class="lead my-3">A very basic version of cms</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        BLOGCMS
      </h3>
      <?php if($posts->num_rows > 0){ 
        while($row = $posts->fetch_assoc()){
        ?>

      

      <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
        <p class="blog-post-meta"><?php echo $row['date']; ?></p>
        <p class="blog-post-meta"><?php echo $row['author']; ?></p>

       <?php echo $row['body']; ?>
      </div><!-- /.blog-post -->

        <?php }}?>


       <form action="insert.php" method="post">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Title" >
  </div>
  <div class="form-group">
    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3" placeholder="Body"></textarea>
  </div>
  <div class="form-group">
    <input type="text" name="category" class="form-control" placeholder="category" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="author" placeholder="author" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="keywords" placeholder="keywords" id="exampleFormControlInput1" >
  </div>
  <button class="btn btn-primary" type="submit">Insert</button>
</form>



    </div><!-- /.blog-main -->
    

    <aside class="col-md-4 blog-sidebar">
    <div class="p-4">
    <form class="form-inline">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputName2" name="search" placeholder="Search">
</form>
<hr>
<br>
      </div>
      <br>
      <br>
      <hr>
      <form>
  <div class="form-group">
    <input type="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="name" placeholder="Name">
  </div>
  <button type="submit" class="btn btn-sm btn-outline-secondary">Submit</button>
</form>
<hr> 
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

</body>
</html>


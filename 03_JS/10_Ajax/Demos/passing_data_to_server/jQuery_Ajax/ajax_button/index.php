<?php
session_start();

if(!isset($_SESSION['favorites'])) { $_SESSION['favorites'] = [];}

function is_favorite($id) {
  return in_array($id, $_SESSION['favorites']);
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Asynchronous Button</title>
  <style>
    #blog-posts {
      width: 700px;
    }
    .blog-post {
      border: 1px solid black;
      margin: 10px 10px 20px 10px;
      padding: 6px 10px;
    }

    button.favorite-button, button.unfavorite-button {
      background: #0000FF;
      color: white;
      text-align: center;
      width: 80px;
    }
    button.favorite-button:hover,  button.unfavorite-button:hover {
      background: #000099;
    }

    .favorite-heart {
      color: red;
      font-size: 2em;
      float: right;
      display: none;
    }
    .favorite .favorite-heart {
      display: block
    }

    button.favorite-button {
      display: inline;
    }
    .favorite button.favorite-button {
      display: none;
    }
    button.unfavorite-button {
      display: none;
    }
    .favorite button.unfavorite-button {
      display: inline;
    }
  </style>
</head>
<body>
  <div id="blog-posts">
    <div id="blog-post-101" class="blog-post <?php if(is_favorite(101)) {echo 'favorite';}?>">

      <span class="favorite-heart">&hearts;</span>
      <h3>Blog Post 101</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget, pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>
      <button class="favorite-button">Favorite</button>
      <button class="unfavorite-button">UnFavorite</button>
    </div>
    <div id="blog-post-102" class="blog-post <?php if(is_favorite(102)) {echo 'favorite';}?>">
      <span class="favorite-heart">&hearts;</span>
      <h3>Blog Post 102</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget, pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>
      <button class="favorite-button">Favorite</button>
      <button class="unfavorite-button">UnFavorite</button>

    </div>
    <div id="blog-post-103" class="blog-post <?php if(is_favorite(103)) {echo 'favorite';}?>">
      <span class="favorite-heart">&hearts;</span>
      <h3>Blog Post 103</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque nunc malesuada mauris fermentum commodo. Integer non pellentesque augue, vitae pellentesque tortor. Ut gravida ullamcorper dolor, ac fringilla mauris interdum id. Nulla porta egestas nisi, et eleifend nisl tincidunt suscipit. Suspendisse massa ex, fringilla quis orci a, rhoncus porta nulla. Aliquam diam velit, bibendum sit amet suscipit eget, mollis in purus. Sed mattis ultricies scelerisque. Integer ligula magna, feugiat non purus eget, pharetra volutpat orci. Duis gravida neque erat, nec venenatis dui dictum vel. Maecenas molestie tortor nec justo porttitor, in sagittis libero consequat. Maecenas finibus porttitor nisl vitae tincidunt.</p>
      <button class="favorite-button">Favorite</button>
      <button class="unfavorite-button">UnFavorite</button>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script>
   $(".favorite-button").on('click', favorite);
   $(".unfavorite-button").on('click', unfavorite);

   function favorite() {
    var parent = $(this).parent();
    console.log(parent.attr('id'));

    $.ajax({
     type:'POST',
     url:'favorite.php',
     data:{id:  parent.attr('id')},
     success:function(data){
       if(data==='true'){
        parent.addClass('favorite');
      }
    }
  });
  }

  function unfavorite() {
    var parent = $(this).parent();
    
    $.ajax({
     type:'POST',
     url:'unfavorite.php',
     data:{id:  parent.attr('id')},
     success:function(data){
       if(data === 'true'){
        parent.removeClass('favorite');
      }
    }
  });
  }

 

</script>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Infinite Scroll</title>
  <style>
    #blog-posts {
      width: 700px;
    }
    .blog-post {
      border: 1px solid black;
      margin: 10px 10px 20px 10px;
      padding: 6px 10px;
    }
    #spinner {
      display: none;
    }
  </style>
</head>
<body>
  <div id="blog-posts">

  </div>

  <div id="spinner">
    <img src="spinner.gif" width="50" height="50" />
  </div>

  <div id="load-more-container">
    <button id="load-more" data-page="0">Load more</button>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>  
  <script>

    var container = $('#blog-posts'),
        load_more = $('#load-more'),    
        request_in_progress = false;

    function showSpinner() {
     $("#spinner").css('display', 'block');
    }

    function hideSpinner() {
    $("#spinner").css('display', 'none');
    }

    function showLoadMore() {
    load_more.css('display', 'none');
    }

    function hideLoadMore() {
      load_more.css('display', 'none');
    }
    function appendToDiv(div, new_html) {
        // Put the new HTML into a temp div
        // This causes browser to parse it as elements.
        var temp = $('<div>');      
        temp.html(new_html);

        // Then we can find and work with those elements.
        // Use firstElementChild b/c of how DOM treats whitespace.
        var items = temp.find('div');
     
        items.each(function(index){
           div.append(items.eq(index));
          }
        );
    }

    function setCurrentPage(page){
       
        load_more.attr('data-page', page);
       
    }
    function scrollReaction(){
        var contentHeight = container.outerHeight();
        var current_y = window.innerHeight + window.pageYOffset;
        
        if (current_y >= contentHeight && request_in_progress == false) {
          loadMore();
        }
    }
    
    function loadMore() {

        if (request_in_progress) { return; }
        request_in_progress = true;

        showSpinner();
        hideLoadMore();

        var page = parseInt(load_more.attr('data-page'));

        var next_page = page + 1;
      
        $.ajax({
         type:'GET',
         url:'blog_posts.php',
         data:{page:  next_page},
         success:function(data){
          hideSpinner();
          setCurrentPage(next_page);
          appendToDiv(container, data);

          showLoadMore();
          request_in_progress = false;

        }
      });
    }

      load_more.on("click", loadMore);
      window.onscroll = function(){
        scrollReaction();
      };

      // Load even the first page with Ajax
      loadMore();
    </script>

  </body>
  </html>

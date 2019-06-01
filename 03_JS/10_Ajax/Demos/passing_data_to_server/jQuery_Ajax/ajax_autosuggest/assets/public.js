$(document).ready(function() {

  var suggestions = $("#suggestions");
  var form = $("#search-form");
  var search = $("#search");



  function suggestionsToList(items){
    var res = $.parseJSON(items);

    var output = '';
    
    $.each(res, function(index, el) {
      output += '<li>';
      output += "<a href='search.php?q=" + el + "'>";
      output +=  el;
      output += "</a>";
      output += '</li>';
    });

  
suggestions.html(output);
console.log(suggestions);
suggestions.css('display', 'block');

  }

  // function showSuggestions(json) {

  //   var li_list = suggestionsToList(json);
  
  //   suggestions.css('display', 'blok');

  // }

  function getSuggestions() {
    var q = search.val();
    if(q.length < 3){
      suggestions.css('display', 'none');
      return;
    }


    $.ajax({
      type:'GET',
      url:'autosuggest.php',
      data:{q:  search.val()},
      success:function(data){
       suggestionsToList(data);
     }

   });
  }
  search.on("input", getSuggestions);
});


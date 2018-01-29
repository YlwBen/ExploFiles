$(document).ready(function(){


  function refresh() {
    $.ajax({ url: 'fonction1.php',
             data: {action: '/home/pascal'},
             type: 'post',
             success: function(output) {
                          $("#arbo").html(output);
                      }
    });
  }

  setInterval(function(){refresh();}, 1000);

});

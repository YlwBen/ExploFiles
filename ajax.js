$(document).ready(function(){


  function refresh() {
    $.ajax({ url: 'fonction1.php',
             data: {action: '/home/pascal'},
             type: 'post',
             success: function(output) {
                          $("#arbo").html(output);
                          $('img').click(function(){
                            console.log('click');

                          });
                      }
    });
  }
  //setInterval(function(){refresh();}, 1000);
  refresh();

});

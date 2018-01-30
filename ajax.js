$(document).ready(function(){


  function refresh() {
    $.ajax({ url: 'fonction1.php',
             data: {action: '/home/yellow'},
             type: 'post',
             success: function(output) {
                          $("#arbo").html(output);
                          $('.clique').click(function(){
                            console.log();
                          $(this).parent().parent().remove();


                          });
                      }
    });
  }
  //setInterval(function(){refresh();}, 1000);
  refresh();

});

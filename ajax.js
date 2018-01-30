function loadDir(rep) {
  $("#chemin").val(rep);
  $.ajax({ url: 'fonction1.php',
           data: {action: rep},
           type: 'post',
           success: function(output) {
                        $("#arbo").html(output);
                        var chemin = $("#chemin").val();
                        $('.clique').click(function(){
                          var foldername = $(this).text();
                          console.log(foldername);
                        loadDir(rep + '/' + foldername);


                        });
                    }
  });
}

$(document).ready(function(){

loadDir('/home/yellow');
});

function dirname(path) {
    return path.replace(/\\/g,'/').replace(/\/[^\/]*$/, '');;
}

function clickup(){
  var rep = $("#chemin").val();
  var repup = dirname(rep);
  $("#chemin").val(repup);
  $.ajax({ url: 'fonction1.php',
           data: {action: rep + '/..'},
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
// Tout ce qui se trouve au dessus n'est qu'un test.

//Arbo
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
$("#back").click(clickup);

loadDir('/home');

});

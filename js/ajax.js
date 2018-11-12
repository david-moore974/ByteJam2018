function getMeme(tag){

    $('#content').empty();
    var formData = new FormData();

    // var sql = "SELECT * FROM memes WHERE tags = '"+ tag + "' AND id BETWEEN"+x+"AND"+y;
    var sql = "SELECT * FROM memes WHERE tags = '"+ tag + "'";

    formData.append('sql', sql);


      $.ajax({
          type:'POST',
          url:'../tags/getMeme.php',
          data:formData,
          success: function(data){

              var parseIt = $.parseJSON(data);

              for(x=0;x<100;x++){

                  document.getElementById('content').innerHTML = "<img width=\"300px\" src=\"" + parseIt[x].url + "\"alt=\"oops...\">";

              }

          }
      });
}

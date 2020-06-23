

  $.getJSON("leaderboard.json", function(data){
    var rep = data;
    console.log(rep);
         
         var name = data[0]['FULL NAME'];
          var user = data[0]['SLACK USERNAME'];
           var score = data[0]['TOTAL POINTS__1'];

           console.log(name + " " + user +" "+ score);

           $(jQuery.parseJSON(JSON.stringify(rep))).each(function() {  
         var names = this['FULL NAME'];
         var usernames = this['SLACK USERNAME'];
         var mail = this['EMAIL'];
         var scores = this['TOTAL POINTS'];

      var arr = [];
     for (var i = 1; i <= scores; i++) arr.push(""+i);


  $("#table").append("<tr>"+"<td>" + names + "</td>"+
      "<td>"+ usernames + "</td>"+
      "<td>" + mail +"</td>"+
      "<td>" + scores + "</td>"+"</tr>"+"<br>"
     );

});

});

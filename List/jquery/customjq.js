var count=0;
function no(){
  count++;
  return(count)
}
function show_hint(str) {
  document.getElementById("h").style.visibility = "hidden";
      if (str.length == 0) {
        document.getElementById("h").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("h").innerHTML = this.responseText;
                document.getElementById("h").style.visibility = "visible";


            }
        };
        xmlhttp.open("GET", "http://localhost/List/gethint.php?q=" +str, true);
        xmlhttp.send();
    }
}
$(document).ready(function() {

    //action for button 2

  $("#btn1").click(function(event) {
    var lol=$("#item").val();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "http://localhost/List/insert.php?word=" +lol, true);
    xmlhttp.send();
    no();
    var value=$("#item").val();
    $("#ul1").append('<li>'+value+'</li>');
    $("li").addClass('list-group-item bg-success text-light text-center');
    $("#id1").text(count);
    vlaue=$("#itm").val("");

  });
  //action for button 3
  $("#btn2").click(function(event) {
    var lool=$("#item").val();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "http://localhost/List/delete.php?word=" +lool, true);
    xmlhttp.send();

    for (var i = 0; i < count; i++)
     {
      var value=$("#item").val();
      var j=$("li").eq(i).text();
      if(value==j)
      {
        $("li").eq(i).remove();
        $("#id1").text(--count);
        vlaue=$("#item").val("");

      }
  }
  });

});

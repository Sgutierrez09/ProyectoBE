function drop(y,id)
{
  var x = y;

  if(x.options[x.selectedIndex].text == "Sí" )
  {
    var g = "cierto["+id+"]";
    $(document.getElementById(g)).css("display", "block");
    var f = "falso["+id+"]";
    $(document.getElementById(f)).css("display", "none");
  }else{
    if(x.options[x.selectedIndex].text == "No")
  {
    var g = "cierto["+id+"]";
    $(document.getElementById(g)).css("display", "none");
    var f = "falso["+id+"]";
    $(document.getElementById(f)).css("display", "block");

  }else{
    if(x.options[x.selectedIndex].text == "Otros")
  {
    var g = "cierto["+id+"]";
    $(document.getElementById(g)).css("display", "block");
    var f = "falso["+id+"]";
    $(document.getElementById(f)).css("display", "none");
  }
  else{
    var g = "cierto["+id+"]";
    $(document.getElementById(g)).css("display", "none");
    var f = "falso["+id+"]";
    $(document.getElementById(f)).css("display", "none");
  }
  }

  }

}
var restar;
function aki(value) {

  restar = value;
  
}

function suma(valor,x) {

  var total = 0;  
    valor = parseInt(valor); // Convertir el valor a un entero (número).
  
    total = $("#total"+x+":input").val();
  
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
    restar = (restar == null || restar == undefined || restar == "") ? 0 : restar;
    total= (parseInt(total) - parseInt(restar));
    total = (parseInt(total) + parseInt(valor));

    $("#total"+x).val(total);
}
function sumatabla(valor,y,x) {
  var tab = y;
  alert(tab);
  var total = 0;  
    valor = parseInt(valor); // Convertir el valor a un entero (número).
  
    total = $("#total"+x+":input").val();
  
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
    restar = (restar == null || restar == undefined || restar == "") ? 0 : restar;
    total= (parseInt(total) - parseInt(restar));
    total = (parseInt(total) + parseInt(valor));

    $("#total"+x).val(total);
}


function check(checkbox,id) {
  if ($(checkbox).is(':checked') == true && checkbox.title == 'Otros'){
   var g = "cierto["+id+"]";
        $(document.getElementById(g)).css("display", "block");
  }else{
        var g = "cierto["+id+"]";
        $(document.getElementById(g)).css("display", "none");
   }
}

function checkform(){
    var f=document.forms['theform'].elements;
    var fieldMustBeFilled=true;
    for( var i=0;i<f.length;i++){
       if(fieldMustBeFilled==0){
        fieldMustBeFilled=false;
       }
       if(fieldMustBeFilled){
        document.getElementById("formbtn").disabled = false;
        document.getElementById("formbtn").style.backgroundColor="black";
        document.getElementById("formbtn").style.color="white";
       }
       else{
        document.getElementById("formbtn").disabled = true;
       }
    }
}
function checkformm(){
    var number=document.getElementById('number');
    window.open("https://quickchart.io/qr?text=4&size=200");
}

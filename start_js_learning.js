/*
function fun1() {
var checkbox;

checkbox = document.getElementById('one');

if(checkbox.checked){

	console.log("Выбран")
}

else{

	console.log("Не Выбран")
}
}*/
function fun_name(){

    var radio = document.getElementsByName('r1');

    for(var i = 0; i < radio.length;i++){
     if(radio[i].checked){
    console.log('Выбран ' + ++i + ' элемент');

     }
     else if(!radio[--radio.length].checked){
     	console.log('Ясно, автору 0 лет')
     }

    }
}
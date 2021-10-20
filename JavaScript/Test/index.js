/*var myName="Adham", myCountry="Alexandria", myAge=20;
var first = 100, second = 200 , res = first + second;

var x=3, y= 5, z = x+y;
document.getElementById("js").innerHTML = myName + "<br>" + myAge + "<br>" + myCountry;
document.getElementById("js2").innerHTML = z;
console.log(z);
alert("HelloWorld !");

var hasDiscount = false;
if (hasDiscount===true) {
    mainPrice = 350;
}
else{
    mainPrice = 450;
}
//console.log(mainPrice);
document.getElementById("js").innerHTML =mainPrice;

Object={
    name:" 'Adham' ",
    Age:20
}
console.log(Object);
document.getElementById("js").innerHTML =Object.name;*/
/*
var hours = new Date().getHours();
 var Greetings;

if ( hours < 18) {
    Greetings = "Good Morning";
    //console.log("Good Morning");
    document.getElementById("js").innerHTML =Greetings;

}
else{    
    Greetings = "Good Evening";
    //console.log("Good Morning");
    document.getElementById("js").innerHTML =Greetings;
}
*/

//var grade = +prompt("Enter your grade:");

//Grades(grade);

function Grades(grade) {
   
    if (grade >100) {

        console.log(" Invalid Number");
        document.getElementById("js").innerHTML = " Invalid Number";

    }
    else if (grade <= 100 && grade >= 85) {

        console.log(" The Grade is A");
        document.getElementById("js").innerHTML = " The Grade is A";

    }
    else if (grade >= 75) {

        console.log(" The Grade is B");
        document.getElementById("js").innerHTML = " The Grade is B";

    }
    
    else if (grade >= 65) {

        console.log(" The Grade is C");
        document.getElementById("js").innerHTML = " The Grade is C";

    }
    else if (grade >= 55) {

        console.log(" The Grade is D");
        document.getElementById("js").innerHTML = " The Grade is D";

    }
    else{

        console.log("The Grade is F ");
        document.getElementById("js").innerHTML = " The Grade is F";

    }
}

function Days(day){

    switch (day) {
        case 0:
            console.log("Today is Sunday" );
            break;
    
        case 1:
            console.log("Today is Monday" );
            break;
    
        case 2:
            console.log("Today is Tuesday" );
            break;
    
        case 3:
            console.log("Today is Wednesday");
            break;
    
        case 4:
            console.log("Today is Thursday");
            break;
    
        case 5:
            console.log("Today is Friday");
            break;
    
        case 6:
            console.log("Today is Saturday");
            break;

    }
}

function Sum(n1,n2){
        return n1+n2;
}


function sayHi(){
        alert("Hello World !");
        console.log(Sum(4,5));
}

(function welcome(){
        
    var name = prompt("What's your name?");

        if (name==="Adham") {
                alert("Welcome On Board!")
        } else {
                alert("You aren't eligible to join !")
        }
})();

function discount(price){
    var discount = 100 ;
    return price-discount;
}
//console.log(discount(700));

function replace(word){
    
    var replaced = word.replace(word, "Adham");
    return replaced;
}
//var word = prompt("What's your name?");
//var date = new Date(); 
//var theDay=date.setFullYear(7);
//var theDay=date.setHours(17);
//console.log(date);


//console.log(word.split(' '));
//alert("Your name is " + word);
//console.log("After Replacement : "+ "\n" + "Your name is " + replace(word));
//console.log(word.search("ah"));
//console.log(word.search(/AH/i));


/*var Name = "Adham";
console.log(Name);

var Name = "Samer";
console.log(Name);

function myFunc(){
    
     Name = "Hosny";
}
myFunc();
console.log(Name);

function myFunc2(){

     Name = "Hasanin";
}
myFunc2();
console.log(Name);*/



function Test(){
     calc = x + 6;
    console.log(calc);

    function Test2(){
         calc += x;
        console.log(calc);

        function Test3(){
            ++x;
        }
        Test3();
    }
    Test2();  
}

/*for (let i = 0; i < 3; i++) {
    
    Test();
}*/

window.onload= function load(){
    document.getElementById('js').innerHTML = "Hello" ;
}

var myCurrency = document.getElementById('Currency');
var myInput = document.getElementById("input");
var myDiv = document.getElementById("js2")


myCurrency.onchange = function(){
    myDiv.innerHTML = myCurrency.value * myInput.value;
}



function click3(){
    document.getElementById('js3').innerHTML = "HelloWorld !!" ;
}




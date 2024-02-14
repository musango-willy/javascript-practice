// learning javascript is interesting


function sum(num1,num2,num3){

    const sum = num1+  num2 + num3;

    console.log(sum);

    return sum;

    console.log ("sorry won't print,because it meets return before me");
} 

Number()

const add=sum(20,20,10);//50 it is used to add two or more operands

console.log(sum);

//fetching data from database

fetch('https://dummyjson.com/product/2')
.then(res=>res.json())
.then(json=>console.log(json))
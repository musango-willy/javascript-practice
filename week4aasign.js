//question 1 :function basics

function calculateArea(length,width){

    let calculateArea=length*width;

    console.log(calculateArea);

}
calculateArea(18,70)


//question 2 :scope exploration



// question 3 :closures and private counters

function function1(){// global function is accessible to both within and outside the function
    var x=10;
    console.log(x);
}
function1(10)

function function1(){
    var x=10;
    console.log(x)
}
function1(10)
// localvar is only accessible within the function
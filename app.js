const  theScore=50;


if(theScore<=39){

    console.log("John failed the test,is a F9 student");

}else if(theScore>=40 && theScore<=49){

    console.log("John is a D student");

}else if (theScore>=50 && theScore<=59){

    console.log("John is a C student");

}else if(theScore>=60 && theScore<=69){

    console.log("John is a B student");

}else if(theScore>=70){

    console.log("John is a A student");

}else{//negative score

    console.log("no score");
}



    //switch statement

    const mayJavaScriptScoreTest=37;
    switch(true){
        case(mayJavaScriptScoreTest>=30 && mayJavaScriptScoreTest<=40):
        console.log("May is a E student")
        break;

        case(mayJavaScriptScoreTest>=41 && mayJavaScriptScoreTest<=50):
        console.log("May is a D student")
        break;

        case(mayJavaScriptScoreTest>=51 && mayJavaScriptScoreTest<=60):
        console.log("May is a C student")
        break;

        case(mayJavaScriptScoreTest>=61 && mayJavaScriptScoreTest<=70):
        console.log("May is a B student")
        break;

        case(mayJavaScriptScoreTest>=71):
        console.log("May is a A student")
        break;

        default:
            console.log("no score")
    }
//for loop

for(let number=2;number<=12;number++){

    console.log(number);

}

// increment number by one


for(let count=20;number>=5;count--){

    console.log(count);

}

// decrements count by one
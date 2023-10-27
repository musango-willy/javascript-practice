// multidimensional arrays

const data=[[1,2,3],[3,5,5],[5,6,7]]

console.log(data[0][0]);

const data=[
    ["peter",42],
    ["john",24],
    ["paul",45],
]
console.log(data[0][0]);

for (let i =0;i<studentData.length;i++){
    let innerArrayLength =studentData[i].length
    for(let j =0;j<innerArrayLength;j++){
        console.log(studentData[i][j])
    }
}

const numbers =[1,2,3,4,5,6,7]

let sum=0

for (let i=0;i<numbers.length;i++){
    
    sum+=numbers[i]
}
console.log(sum)
arr1 = ['one', 'second', ['2-0', '2-1', '2-2'], 4, 5]
console.log(arr1)
console.log(arr1[0])
console.log(arr1.length)
console.log(arr1[4] = 'five')
console.log(arr1[2][0] = '2-zero')
arr1.push(6)
console.log(arr1)
arr1.pop()
arr1.unshift('pre-one')
console.log(arr1)
arr1.shift()
console.log(arr1)
console.log(arr1.length)
console.log(arr1[arr1.length-1]) // получаем последний элемент массива
var myData = "Manchester,London,Liverpool,Birmingham,Leeds,Carlisle";
var myArray = myData.split(",");
console.log(myArray);



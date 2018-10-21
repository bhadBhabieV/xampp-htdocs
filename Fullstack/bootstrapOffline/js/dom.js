// var $ = require('jquery');

// $('body').css('background', 'blue');


// console.dir(document);

//
// console.log(document.title);
// console.log(document.head);
//
// var items = document.getElementsByClassName('btn');
// console.log(items);
//
// function myFunction() {
//   console.log('Hello');
// }
//
// var myArr = [ {num:5, str:'apple'}, {num:7, str:'cabbage'}, {num:1, str:'orange'}]
//
// myArr.sort(function(v1, v2)
// {
//   if (v1.num < v2.num)
//     return -1;
//
//   else
//     return 1;
// });
//
// console.log(myArr);

function Bear(type)
{
  this.type = type
}

var grizzly = new Bear()
console.log(grizzly)

let grizzly2 = new Bear();

let countdownFrom = (num) => {
  if (num === 0) return;
  console.log(num);

  countdownFrom(num - 1);
}

countdownFrom(10);

var countdownFrom2 = function(num) {
  if (num === 0) return;
  console.log(num);

  countdownFrom2(num - 1);
}

countdownFrom2(5);

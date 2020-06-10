var count = document.getElementById('count');
var input = document.getElementById('input');

input.addEventListener('keyup', function(e){
    wordCounter(e.target.value);
});

function wordCounter(string) {
    var string = input.value;
    var wordCount = 0;
    for (var i = 0; i <= string.length; i++) {
        // if (string.charAt(i) == '') {
            wordCount++;
        // }
    }
    count.innerText = wordCount;
}


//these below are for actual words

// function wordCounter(text) {
//     var text = input.value.split(' ');
//     var wordCount = 0;
//     for (var i = 0; i < text.length; i++) {
//         if (text[i] !== ' ' && isWord(text[i])) {
//             wordCount++;
//         }
//     }
//     count.innerText = wordCount;
// }
//
// function isWord(str) {
//     var alphaNumericFound = false;
//     for (var i = 0; i < str.length; i++) {
//         var code = str.charCodeAt(i);
//         if ((code > 47 && code < 58) || // numeric (0-9)
//             (code > 64 && code < 91) || // upper alpha (A-Z)
//             (code > 96 && code < 123)) { // lower alpha (a-z)
//             alphaNumericFound = true;
//             return alphaNumericFound;
//         }
//     }
//     return alphaNumericFound;
// }


var count2 = document.getElementById('count2');
var input2 = document.getElementById('input2');

input2.addEventListener('keyup', function(e){
    wordCounter2(e.target.value);
});

function wordCounter2(string) {
    var string = input2.value;
    var wordCount = 0;
    for (var i = 0; i <= string.length; i++) {
        // if (string.charAt(i) == '') {
        wordCount++;
        // }
    }
    count2.innerText = wordCount;
}

var count3 = document.getElementById('count3');
var input3 = document.getElementById('input3');

input3.addEventListener('keyup', function(e){
    wordCounter3(e.target.value);
});

function wordCounter3(string) {
    var string = input3.value;
    var wordCount = 0;
    for (var i = 0; i <= string.length; i++) {
        // if (string.charAt(i) == '') {
        wordCount++;
        // }
    }
    count3.innerText = wordCount;
}

const palindrome = "kayak";
mot_inverse = "";

for (value of palindrome) {
    mot_inverse = value+ mot_inverse;
}

if (mot_inverse == palindrome) {
    console.log("c'est un palindrome");
}
else {
    console.log("ce n'est un palindrome");
}


function ispalindrome(palindrome) {
    let ispalindrome = true;
    for (let i = 0; i < palindrome.length; i++) {
        if (palindrome[i] !== palindrome[palindrome.length-i-1]) {
            return false;
        }

    }
    return ispalindrome;
}

console.log(ispalindrome(palindrome));



function ispalindromewithwhile(palindrome) {
    let ispalindrome = false;
    let start = 0;
    let end = palindrome.length - 1;
   
    while (start < end) {
        if (palindrome[start] !== palindrome[end]) {
            return false;
        }
        ispalindrome = palindrome[start] === palindrome[end];
        start ++;
        end --;
    }return ispalindrome;
}


console.log(ispalindromewithwhile(palindrome));
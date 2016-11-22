// @function
// @name whiteFilterStr
// @description Filter a string and allow only characters in the white list string
// @param {string} inputStr - String to be sanatized
// @param {string} whiteListStr - Allowed characters
// @return {string} cleanStr - Sanatized string. If fault then empty
function whiteFilterStr(inputStr, whiteListStr) {
    "use strict";
    var cleanStr = "";
    var inputStrLength = 0;
    var character = "";
    
    if ((typeof inputStr !== "string") || (typeof whiteListStr !== "string")) {
        return cleanStr;
    }
    inputStrLength = inputStr.length;
    // Filter the input string with the white list
    var i = 0;
    while (i < inputStrLength) {
        character = inputStr.charAt(i);
        if (whiteListStr.indexOf(character) !== -1) {
            cleanStr += character;
        }
        i += 1;
    }
    return cleanStr;
}

/**
 * @param {string} pattern
 * @param {string} s
 * @return {boolean}
 */
var wordPattern = function(pattern, s) 
{
   let words = s.split(" ");

   if(pattern.length !== words.length)
   {
    return false;
   }

   let charToWord = new Map();
   let wordToChar = new Map();

   for (let i=0;i< pattern.length;i++)
   {
        let ch = pattern[i];
        let word = words[i];

        if(charToWord.has(ch) && charToWord.get(ch) !== word)
        {
            return false;
        }

        if (wordToChar.has(word) && wordToChar.get(word) !== ch)
        {
            return  false;
        }

        charToWord.set(ch,word);
        wordToChar.set(word,ch);
    }

    return true;
};
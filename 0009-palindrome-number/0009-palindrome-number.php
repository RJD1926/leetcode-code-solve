class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
       if($x < 0)
       {
        return false;
       } 
       $original = $x;
       $reverse = 0;

       while($x > 0)
       {
        $digit = $x % 10;
        $reverse = ($reverse * 10 ) + $digit;
        $x = floor($x / 10);
       }

       return $original == $reverse;
        
    }
}
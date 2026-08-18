class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n) 
    {
        $result = "1";

        for($i = 2 ; $i <= $n ; $i++)
        {
            $next = "";
            $count = 1;
            $length = strlen($result);

            for($j = 1 ; $j < $length; $j++)
            {
                if($result[$j] == $result[$j - 1])
                {
                    $count++;
                }
                else
                {
                    $next .= $count.$result[$j - 1];

                    $count = 1;
                }
            }
            $next .=  $count.$result[$length - 1];

            $result = $next;

        }

        return $result;
    }
}
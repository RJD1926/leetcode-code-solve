class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    function combine($n, $k) {
        $result = [];
        $current = [];

        $this -> backtrack(1, $n ,$k ,$current , $result);

        return $result;
    }

    function backtrack($start , $n , $k , &$current , &$result)
    {
        if (count ($current)== $k)
        {
            $result[] = $current;
            return;
        }

        for($i = $start ; $i <= $n ; $i++ )
        {
            $current[] = $i;

            $this -> backtrack
            (
                $i + 1 ,
                $n,
                $k,
                $current,
                $result
            );

            array_pop($current);
        }
    }

}
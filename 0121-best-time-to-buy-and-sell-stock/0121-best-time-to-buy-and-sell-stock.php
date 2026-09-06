class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
       $minPrice = $prices[0];
       $maxProfit = 0;
       for($i = 1 ; $i< count($prices); $i++)
       {
            $profit = $prices[$i] - $minPrice;

            if($profit > $maxProfit)
            {
                $maxProfit = $profit;
            }

            if($prices[$i] < $minPrice)
            {
                $minPrice = $prices[$i];
            }
       } 

       return $maxProfit;
    }
}
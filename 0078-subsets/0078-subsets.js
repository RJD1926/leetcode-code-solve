/**
 * @param {number[]} nums
 * @return {number[][]}
 */
var subsets = function(nums){
    const result = [];
    const current = [];

    function backtrack(start)
    {
        result.push([...current]);

        for(let i = start;i<nums.length;i++)
        {
            current.push(nums[i]);
            backtrack(i+1);
            current.pop();
        }
    }
    backtrack(0);
    return result;
};
    
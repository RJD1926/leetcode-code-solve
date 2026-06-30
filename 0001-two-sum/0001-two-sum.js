function twoSum(nums, target) {
    const seen = new Map(); // value -> index
    for (let i = 0; i < nums.length; i++) {
        const complement = target - nums[i];
        if (seen.has(complement)) {
            return [seen.get(complement), i];
        }
        seen.set(nums[i], i);
    }
    return []; 
}


console.log(twoSum([2,7,11,15], 9));   // [0,1]
console.log(twoSum([3,2,4], 6));       // [1,2]
console.log(twoSum([3,3], 6));         // [0,1]

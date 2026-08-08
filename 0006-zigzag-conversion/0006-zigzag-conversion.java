class Solution {
    public String convert(String s, int numRows) {
      if( numRows == 1 ||  numRows >= s.length() )
      {
        return s ;
      }  
      StringBuilder[] rows = new StringBuilder[numRows];

      for(int i = 0; i< numRows; i++ )
      {
        rows[i] = new StringBuilder();
      }

      int currentRow = 0;

      boolean goingDown = true;
      for(char c : s.toCharArray())
      {
        rows[currentRow].append(c);
        if (currentRow == 0)
        {
            goingDown = true;
        }
        else if(currentRow == numRows -1)
        {
            goingDown = false;
        }
        if (goingDown)
        {
            currentRow++;
        }
        else
        {
          currentRow--;  
        }
      }
    
        StringBuilder answer = new  StringBuilder();

        for(int i=0 ; i<numRows ; i++)
        {
            answer.append(rows[i]);
        }

        return answer.toString();
    }
}
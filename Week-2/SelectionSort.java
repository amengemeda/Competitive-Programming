//{ Driver Code Starts
import java.util.*;

class GFG
{
	public static void main(String args[])
	{
		Scanner sc = new Scanner(System.in);
		int t = sc.nextInt();
		while(t>0)
		{
			int n = sc.nextInt();
			int arr[] = new int[n]; 
			for(int i=0;i<n;i++)
			{
				arr[i] = sc.nextInt();
			}
		
			Solution obj = new Solution();
			obj.selectionSort(arr, n);
			
			for(int i=0;i<n;i++)
		    	System.out.print(arr[i]+" ");
		    System.out.println();
			t--;
		}
		
	}
}

// } Driver Code Ends


class Solution
{
	int  select(int arr[], int i)
	{
        // code here such that selectionSort() sorts arr[]
        for(int j=(i+1); j<arr.length; j++){
	        if(arr[j]<arr[i]){
	            i=j;
	        }
	    }
	    return i;
	}
	
	void selectionSort(int arr[], int n)
	{
	    //code here
	    int value;
	    
	    for(int i=0; i<n; i++){
	       // sortedArray[i] = arr[select(arr,i)];
   	        value = arr[select(arr,i)];
   	        arr[select(arr,i)]=arr[i];
   	        arr[i] = value;
	    }
	    
	}

}
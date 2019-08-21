import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        int[] scores = new int[n];
        int[] ranks = new int[n];
        for(int i=0, rank=1; i < n; i++){
            int s = in.nextInt();
            scores[i] = s;
            if(i > 0 && scores[i-1] != s)
                rank++;
            ranks[i] = rank;    
        }
        int ranking = ranks[ranks.length-1] + 1;
        int lbList = n-1;
        int m = in.nextInt();
        int oldScr = -1;
        for(int scoring=0; scoring < m; scoring++){
            int levelScore = in.nextInt();
            for(int i = lbList; i >= -1; i--){
                if(i < 0 || scores[i] > levelScore){
                    System.out.println(ranking);
                    break;
                }else if(scores[i] < levelScore){
                    if(scores[i] != oldScr){
                        ranking--;    
                    }
                    lbList--;
                }else{
                    lbList--;
                    ranking = ranks[i];
                }
                oldScr = scores[i];
            }
        }
    }
}

import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {
    static void indexed(String p, String v){
        String op = "";
        int i;
        int k;
        boolean matched;
        matched = false;
        int N_Diff;
        int plen = p.length();
        int vlen = v.length();
        for (i=0; i<=plen - vlen;i++){
            N_Diff = 0;
            for (k = i; k <= i + vlen - 1; k++){
                if (p.charAt(k) != v.charAt(k-i)){
                    N_Diff++;
                    if (N_Diff >= 2)
                        break;
                }
            }
            if (N_Diff < 2){
                op = op.concat(i+ " ");
                matched = true;
            }
        }
        if (!matched){
            op = "No Match!";
        }
        System.out.println(op);
        return;  
    }
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int t = in.nextInt();
        for(int a0 = 0; a0 < t; a0++){
            String p = in.next();
            String v = in.next();
            indexed(p, v);
        }
        in.close();
    }
}

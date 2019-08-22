#include <map>
#include <set>
#include <list>
#include <cmath>
#include <ctime>
#include <deque>
#include <queue>
#include <stack>
#include <bitset>
#include <cstring>
#include <cstdio>
#include <limits>
#include <vector>
#include <cstdlib>
#include <numeric>
#include <sstream>
#include <iostream>
#include <algorithm>
using namespace std;
typedef long long ll;
 
long long int stringSimilarity(string s) {
    
    ll L = 0, R = 0,z[100000 + 5],n=s.size();
    for (ll i = 1; i < n; i++) {
        if (i > R) {
            L = R = i;
            while (R < n && s[R-L] == s[R]) R++;
            z[i] = R-L; R--;
        } 
        else {
         int k = i-L;
          if (z[k] < R-i+1) z[i] = z[k];
          else {
            L = i;
            while (R < n && s[R-L] == s[R]) R++;
            z[i] = R-L; R--;
          }
        }
    }
    ll ans=0;
    for(ll i=1;i<n;i++) ans+=z[i];
    return ans + s.size();
}
int main() {
    int t, i;
    scanf("%d",&t);
    string s;
    for (i=0;i<t;i++) {
        cin>>s;
        long long int res=stringSimilarity(s);
        printf("%lld\n",res);  
    }  
    return 0;
}

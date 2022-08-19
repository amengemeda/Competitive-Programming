#include <iostream>

using namespace std;

int main()
{
    int M, N, A, X, Y;
    cin >> N >> M >> A;
    if(N%A==0){
        X= N/A;
    }else{
        X = N/A + 1;
    }
    
    if(M%A==0){
        Y= M/A;
    }else{
        Y = M/A + 1;
    }
    
    cout << (X*Y) << endl;
    return 0;
}

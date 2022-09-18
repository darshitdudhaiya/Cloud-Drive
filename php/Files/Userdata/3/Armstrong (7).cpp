

#include<iostream>

using namespace std;

int main()
{

    int num,rem,temp,sum;

    cout << "Enter Number :";
    cin >> num;

    temp = num;

    while(num!=0)
    {
        rem =num%10;
        sum = num+(rem+rem+rem);
        num /=10;
    }

    cout << rem;
    cout << sum;


    return 0;
}  
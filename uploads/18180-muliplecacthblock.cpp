#include<iostream>
using namespace std;

void test(int v)
{
try
{
if(v==1)
{
throw 10;
}
else if(v==2)
{
throw 'a';
}
else if(v==3)
{
throw 40;
}
}
catch(int x)
{
cout<"integer exception"<<endl;
}
catch(char c)
{
cout<<"charcter exception"<<endl;
}
catch(float y)
{
cout<<"float exception"<<endl;
}
}
int main()
{

test(2);
test(3);
test(1);
return 0;
}


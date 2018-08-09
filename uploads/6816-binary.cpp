 #include<iostream>
 using namespace std;
class complex
 {
 	int real, imaginary;
 	public:
 		complex()
 		{
 			
	}
	complex(int a, int b)
	{real=a;
	imaginary=b;
}
void operator +(complex);
};
void complex::operator+(complex c)
complex temp;
temp.real =real+c.real;
temp.imaginary = imaginary + c.imaginary;
cout<<"real sum is :"<<temp.real<<endl;
cout<<"imaginary sum is:"<<temp.imaginary<<endl;
}
int main()
{
	complex c1(10,20);
	complex c2(20,30);
	c1+c2;
	return 0;
}

}
 

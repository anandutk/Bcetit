#include <iostream> 
#include <cmath> 
#include <cstdlib> 
#include <time.h> 
#include <vector> 
#include <string> 
#include <iomanip> 
#include <windows.h> 
using namespace std; 
const double HALFPi = 1.5707963267949; 
const double Pi = 3.14159265358979; 
const double THREEHALFSPi = 4.7123889803847; 
const double TWOPi = 6.2831853071796; 
struct ReturnError{int i; ReturnError(int ii) {i=ii;}}; 
void Error(); 
double Exp(double x); 
double Ln(double x); 
double ArcTan(double x); 
double CallFunction(int Choice, double x, double y); 
double CallCPlusPlusFunction(int choice, double x, double y); 
int Prompt(int Reason); 
double Addition(double x, double y) {return x + y;} 
double Subtraction(double x, double y) {return x - y;} 
double Multiplication(double x, double y) {return x * y;} 
double Division(double x, double y) {return x / y;} 
double ModEstimator(double x, double y) // x mod(y) && y must be positive. 
{ 
if (y <= 0) Error(); 
double estimator = x / y; 
 estimator = estimator - (int)estimator; 
if (estimator < 0) return (estimator*y + y) ; 
return estimator * y; 
} 
double Mod() 
{ 
 cout << "Given: x (mod y)" << "\nPlease Enter 'x': "; 
double x; 
 cin >> x; 
if (cin.fail()) Error(); 
 cout << "Please Enter 'y': "; 
double y; 
 cin >> y; 
if (cin.fail()) Error(); 
return ModEstimator(x, y); 
 Error(); 
} 
double Sqrt(double x) // Note: Sqrt(x*y) = Sqrt(x)*Sqrt(y); 
{ 
if (x < 0) Error(); 
double Answer = 1; 
double Adjuster = 1; 
if(x > 0 && x < 1) 
 {  - 18 - 
 Adjuster = x; 
 x = 1 / x; 
 } 
if (x < 1e100 && x > 1) 
 { 
if ( x > 1e50) 
 { 
 Answer = 1e25; 
 x = x / 1e50; 
 } 
if ( x > 1e25) 
 { 
 Answer = Answer * 3.162277660e12; 
 x = x / 1e25; 
 } 
if ( x > 3.162277660e12) 
 { 
 Answer = Answer * 1.778279410e6; 
 x = x / 3.162277660e12; 
 } 
if ( x > 1.778279410e6) 
 { 
 Answer = Answer * 1333.521432; 
 x = x / 1.778279410e6; 
 } 
if ( x > 1333.521432) 
 { 
 Answer = Answer * 36.51741272; 
 x = x / 1333.521432; 
 } 
if ( x > 36.51741272) 
 { 
 Answer = Answer * 6.042963902; 
 x = x / 36.51741272; 
 } 
if ( x > 6.042963902) 
 { 
 Answer = Answer * 2.458244069; 
 x = x / 6.042963902; 
 } 
if ( x > 2.458244069) 
 { 
 Answer = Answer * 1.5678788438; 
 x = x / 2.458244069; 
 } 
if ( x > 1.5678788438) 
 { 
 Answer = Answer * 1.2521496891; 
 x = x / 1.5678788438; 
 } 
if ( x > 1.2521496891) 
 { 
 Answer = Answer * 1.1189949460; 
 x = x / 1.2521496891; 
 } 
if ( x > 1.1189949460) 
 {  - 19 - 
 Answer = Answer * 1.0578255745; 
 x = x / 1.1189949460; 
 } 
if ( x > 1.0578255745) 
 { 
 Answer = Answer * 1.0285064775; 
 x = x / 1.0578255745; 
 } 
if (x > 1) 
 { 
 Answer = Answer * (.27731022259508+(1.0784488163225+(-
.52420398582544+(.20382065911444-0.35375712175953e-1*x)*x)*x)*x); 
 } 
return Answer * Adjuster; 
 } 
if (x == 0) return 0; 
if (x == 1) return 1; 
 Error(); 
} 
double Power(double x, double y) 
{ 
double Adjuster = 1; 
if (x < 0) 
 { 
if (y - (int)y != 0) Error(); //nth root of negitive #, where n 
is a not an integer. 
if (ModEstimator(y, 2) == 1) 
 Adjuster = Adjuster * -1; 
 x = -1 * x; 
 } 
if (x == 0) 
 { 
if (y == 0) Error(); 
return 0; 
 } 
return Adjuster * Exp(y*Ln(x)); 
} 
double SinEstimator(double x) // x - > [0, Pi/2] 
{ 
if (x > 0.1 && x < HALFPi) 
return -0.84670000000000e-10+(1.0000000023612+(-
0.26645520000000e-7+(-.16666650472215+(-
0.59590816893210e-
6+(0.83347449028899e-2+(-0.22231169620330e-5+(-0.19605809547659e-3+(-
0.16622686387982e-5+(0.35102425487219e-5-0.20185741637521e-
6*x)*x)*x)*x)*x)*x)*x)*x)*x)*x; 
if (x <= 0.1 && x > .0003107341499) 
return -0.10000000000000e-14+(1.0000000000024+(-
0.38089751810000e-9+(-.16666664385070+(-0.65132477470000e-
6+(0.83428817050840e-2-0.69430869016437e-4*x)*x)*x)*x)*x)*x; 
if (x >= 0 && x < .0003107341499) 
return x; 
} 
double Sin(double x) 
{ 
if (x < 0 || x >= TWOPi) 
 x = ModEstimator(x, TWOPi); 
if(x >= 0 && x < HALFPi)  - 20 - 
return SinEstimator(x); 
if(x >= HALFPi && x < Pi) 
return SinEstimator(Pi - x); 
if(x >= Pi && x < THREEHALFSPi) 
return -SinEstimator(x - Pi); 
if(x >= THREEHALFSPi && x < TWOPi) 
return -SinEstimator(TWOPi - x); 
 Error(); 
} 
double Cos(double x) 
{ 
return Sin(x - HALFPi); 
} 
double Tan(double x) 
{ 
 x = ModEstimator(x, TWOPi); 
if (x < HALFPi) return Sin(x) / Cos(x + TWOPi); 
//Eliminates the need for the modulo function to be computed 
within cosine. 
if (x >= HALFPi) return Sin(x) / Cos(x); 
} 
double ArcSinEstimator(double x) // x -> [0, 1] 
{ 
if (x <= .70710678118655 && x >= 0.15) // .70710678118655 = (.5 * 
sqrt(2)) 
return 0.44048609600000e-4+(.99807907244156+(0.38012728398690e-
1+(-.28590881250036+(3.6236119542291+(-20.578529307156+(86.489755056376+(-
270.53863165212+(636.17866292572+(-1119.9093129553+(1455.0351791982+(-
1354.8081850293+(856.12545216732+(-
329.29871045847+58.355732347635*x)*x)*x)*x)*x)*x)*x)*x)*x)*x)*x)*x)*x)*x; 
// 9 Sig. Figures accuracy. 
if (x < 1 && x > .70710678118655) // .70710678118655 = (.5 * sqrt(2)) 
return -ArcSinEstimator(Sqrt(1-(x*x))) + HALFPi; 
if (x <.15 && x > 0.00003107341499) 
return 0.40000000000000e-14+(1.0000000000003+(-
0.62786854300000e-10+(.16666667191523+(-0.22181691775660e-
6+(0.75005342290432e-1+(-0.77277293773000e-4+(0.45317459415328e-1+(-
0.33655927030790e-2+0.38189409351506e-1*x)*x)*x)*x)*x)*x)*x)*x)*x; 
if (x >= 0 && x <= 0.00003107341499) 
return x; 
 Error(); 
} 
double ArcSin(double x) // x -> [-1, 1] 
{ 
if (x < 1 && x > 0) return ArcSinEstimator(x); 
if (x < 0 && x > -1) return -ArcSinEstimator(-x); 
if (x == 1) return HALFPi; 
if (x == 0) return 0; 
if (x == -1) return -HALFPi; 
 Error(); 
} 
double ArcCos(double x) // x -> [-1, 1] 
{ 
if (x < 1 && x > -1) return ArcSin(-x)+HALFPi; 
if (x == 1) return 0; 
if (x == -1) return Pi;  - 21 - 
 Error(); 
} 
double ArcTan(double x) 
{ 
if(x < 1e100 && x > 1e10) return HALFPi; 
if(x < -1e10 && x > -1e100) return -HALFPi; 
if(x >= -1e10 && x <= 1e10) return ArcSin(x/sqrt(x*x+1)); 
 Error(); 
} 
double ExpEstimator(double x) // x -> [0, 0.125] 
{ 
if (x > 0 && x <= 0.125) 
return
1.0000000005260+(.99999979004637+(.50001339110801+(.16636841193070+.044362599
37134*x)*x)*x)*x; 
if (x == 0) 
return 1; 
 Error(); 
} 
double Exp(double x) 
{ 
if (x > 230.25850929940 || x < -230.25850929940) Error(); 
bool LessThanZero = false; 
if (x < 0) 
 { 
 x = -x; 
 LessThanZero = true; 
 } 
double result = 1; 
if (x > 0) 
 { 
if (x >= 128) 
 { 
 result = .38877084059946e56; 
 x = x - 128; 
 } 
if (x >= 64) 
 { 
 result = result * .62351490808116e28; 
 x = x - 64; 
 } 
if (x >= 32) 
 { 
 result = result * 78962960182681; 
 x = x - 32; 
 } 
if (x >= 16) 
 { 
 
 result = result * 8886110.5205079; 
 x = x - 16; 
 } 
if (x >= 8) 
 { 
 result = result * 2980.9579870417; 
 x = x - 8; 
 } 
if (x >= 4)  - 22 - 
 { 
 result = result * 54.598150033144; 
 x = x - 4; 
 } 
if (x >= 2) 
 { 
 result = result * 7.3890560989307; 
 x = x - 2; 
 } 
if (x >= 1) 
 { 
 result = result * 2.7182818284590; 
 x = x - 1; 
 } 
if (x >= 0.5) 
 { 
 result = result * 1.64872127070013; 
 x = x - 0.5; 
 } 
if (x >= 0.25) 
 { 
 result = result * 1.28402541668774; 
 x = x - 0.25; 
 } 
if (x >= 0.125) 
 { 
 result = result * 1.13314845306683; 
 x = x - 0.125; 
 } 
if (x > 0) result = result * ExpEstimator(x); 
if (LessThanZero == false) 
return result; 
else if (LessThanZero == true) 
return 1 / result; 
 } 
else if (x == 0) return 1; 
 Error(); 
} 
double Ln(double x) // Base e. 
{ 
double Answer = 0; 
int Adjuster = 1; 
if(x > 0 && x < 1) 
 { 
 x = 1 / x; 
 Adjuster = -1; 
 } 
if (x < 1e100 && x > 1) 
 { 
if (x >= 1e50) 
 { 
 Answer = 115.12925465; 
 x = x / 1e50; 
 } 
if (x >= 1e25) 
 { 
 Answer = Answer + 57.56462732;  - 23 - 
 x = x / 1e25; 
 } 
if (x >= 3.162277660e12) 
 { 
 Answer = Answer + 28.782313662; 
 x = x / 3.162277660e12; 
 } 
if (x >= 1.778279410e6) 
 { 
 Answer = Answer + 14.391156831; 
 x = x / 1.778279410e6; 
 } 
if (x >= 1333.521432) 
 { 
 Answer = Answer + 7.195578415; 
 x = x / 1333.521432; 
 } 
if (x >= 36.51741272) 
 { 
 Answer = Answer + 3.597789208; 
 x = x / 36.51741272; 
 } 
if (x >= 6.042963902) 
 { 
 Answer = Answer + 1.798894604; 
 x = x / 6.042963902; 
 } 
if (x >= 2.458244069) 
 { 
 Answer = Answer + 0.8994473020; 
 x = x / 2.458244069; 
 } 
if (x >= 1.5678788438) 
 { 
 Answer = Answer + .44972365096; 
 x = x / 1.5678788438; 
 } 
if (x >= 1.2521496891) 
 { 
 Answer = Answer + .22486182552; 
 x = x / 1.2521496891; 
 } 
if (x >= 1.1189949460) 
 { 
 Answer = Answer + .11243091279; 
 x = x / 1.1189949460; 
 } 
if (x >= 1.0578255745) 
 { 
 Answer = Answer + 0.56215456423e-1; 
 x = x / 1.0578255745; 
 } 
if (x > 1.001) 
 { 
 Answer = Answer + (-2.4217836535974+(5.8328745435397+(-
7.0875349387807+(6.1237356880758+(-3.3479880477301+(1.0412379902940-
.14054158180134*x)*x)*x)*x)*x)*x);  - 24 - 
 } 
else if (x > 1.000000005) 
 { 
 Answer = Answer + (-1.4995002493334+(1.9990006859698-
.49950043662595*x)*x); //Need better estimator for this! 
 } 
else if (x > 1.000000001) 
 { 
 Answer = Answer + x - 1; 
 } 
return Answer * Adjuster; 
 } 
if(x == 1) return 0; 
 Error(); 
} 
double Log(double x) // Base 10. 
{ 
if (x > 0 && x < 1e100) 
return Ln(x) / 2.3025850929940; 
 Error(); 
} 
double GetX() 
{ 
 cout << "Please enter a number:\n"; 
double x; 
 cin >> x; 
if (cin.fail()) Error(); 
if (x >= 1e100 || x <= -1e100) Error(); 
if (x >= -1e-100 && x < 0) Error(); 
if (x <= 1e-100 && x > 0) Error(); 
return x; 
} 
vector<double> GetRandomNumbers(long NumberOfTerms) //Will NOT include upper 
bound or lower bound. 
{ 
const long Max = 32768; //2^15. 
 cout << "What would you like the upper bound to be?\n"; 
double UpperBound = GetX(); 
 cout << "What would you like the lower bound to be?\n"; 
double LowerBound = GetX(); 
if (UpperBound <= LowerBound) Error(); 
double DifferenceOfBounds = UpperBound - LowerBound; 
double Slide = UpperBound/DifferenceOfBounds - 1; 
 time_t seconds; //www.cprogramming.com/tutorial/random.html 
 time(&seconds); 
 srand((unsigned int) seconds); 
 vector<double> RandomNumberVector(NumberOfTerms); 
int Counter = 0; 
do 
 { 
 RandomNumberVector[Counter] = ((RandomNumberVector[Counter] / 
(Max)) + Slide) * DifferenceOfBounds; 
 Counter++; 
 }while (Counter < NumberOfTerms);  - 25 - 
return RandomNumberVector; 
} 
void MaxPercentErrorEstimator() 
{ 
int FunctionChoice = Prompt(1); 
 cout << "How many numbers would you like to sample?\n"; 
long NumberOfTerms; 
 cin >> NumberOfTerms; 
if (cin.fail() || NumberOfTerms < 0) Error(); 
 cout << "This is the for the X values\n"; 
 vector<double> RandomNumbersX = GetRandomNumbers(NumberOfTerms); 
 vector<double> RandomNumbersY(NumberOfTerms); 
if(FunctionChoice == 1 || FunctionChoice == 2 || FunctionChoice == 3 || 
FunctionChoice == 4 || FunctionChoice == 6 || FunctionChoice == 8) 
 { 
 cout << "This is the for the Y values\n"; 
 vector<double> RandomNumbersY = GetRandomNumbers(NumberOfTerms); 
 } 
else 
 { 
int Counter = 0; 
do 
 { 
 RandomNumbersY[Counter] = 0; 
 Counter++; 
 }while (Counter < NumberOfTerms); 
 } 
double PercentError = 0; 
double MaxPercentError = 0; 
int Counter = 0; 
do 
 { 
 PercentError = (CallFunction(FunctionChoice, 
RandomNumbersX[Counter], RandomNumbersY[Counter]) - 
CallCPlusPlusFunction(FunctionChoice, RandomNumbersX[Counter], 
RandomNumbersY[Counter]))/CallCPlusPlusFunction(FunctionChoice, 
RandomNumbersX[Counter], RandomNumbersY[Counter]); 
if (PercentError < 0) PercentError = -PercentError; 
if (PercentError > MaxPercentError) MaxPercentError = 
PercentError; 
 Counter++; 
 }while (Counter < NumberOfTerms); 
 cout << "Max percent error = " << setprecision(4) << MaxPercentError << 
"\n"; 
} 
void EfficiencyEstimator() 
{ 
int FunctionChoice = Prompt(1); 
 cout << "How many numbers would you like to sample?\n"; 
long NumberOfTerms; 
 cin >> NumberOfTerms; 
if (cin.fail() || NumberOfTerms < 0) Error(); 
 cout << "This is the for the X values\n";  - 26 - 
 vector<double> RandomNumbersX = GetRandomNumbers(NumberOfTerms); 
 vector<double> RandomNumbersY(NumberOfTerms); 
if(FunctionChoice == 1 || FunctionChoice == 2 || FunctionChoice == 3 || 
FunctionChoice == 4 || FunctionChoice == 6 || FunctionChoice == 8) 
 { 
 cout << "This is the for the Y values\n"; 
 vector<double> RandomNumbersY = GetRandomNumbers(NumberOfTerms); 
 } 
else 
 { 
int Counter = 0; 
do 
 { 
 RandomNumbersY[Counter] = 0; 
 Counter++; 
 }while (Counter < NumberOfTerms); 
 } 
int Counter = 0; 
 DWORD StartTick, EndTick; 
 StartTick = GetTickCount(); 
do 
 { 
 CallFunction(FunctionChoice, RandomNumbersX[Counter], 
RandomNumbersY[Counter]); 
 Counter++; 
 }while (Counter < NumberOfTerms); 
 EndTick = GetTickCount(); 
double ElapsedTicks1 = (EndTick - StartTick); 
 cout << "Estimator Function Elapsed Ticks: " << ElapsedTicks1 << "\n"; 
 Counter = 0; 
 StartTick = GetTickCount(); 
do 
 { 
 CallCPlusPlusFunction(FunctionChoice, RandomNumbersX[Counter], 
RandomNumbersY[Counter]); 
 Counter++; 
 }while (Counter < NumberOfTerms); 
 EndTick = GetTickCount(); 
double ElapsedTicks2 = (EndTick - StartTick); 
 cout << "C++ Function Elapsed Ticks:" << ElapsedTicks2 << "\n"; 
double MultiplesSlower = ElapsedTicks1/ElapsedTicks2; 
 cout << "The funtion is " << setprecision(4) << MultiplesSlower << " 
times slower than the C++ built in function.\n"; 
} 
double CallCPlusPlusFunction(int choice, double x, double y) 
{ 
if (choice == 1) return x + y; 
if (choice == 2) return x - y; 
if (choice == 3) return x * y; 
if (choice == 4) return x / y; 
if (choice == 5) return sqrt(x); 
if (choice == 6) return pow(x, y); 
if (choice == 7) return exp(x); 
if (choice == 10) return sin(x);  - 27 - 
if (choice == 11) return cos(x); 
if (choice == 12) return tan(x); 
if (choice == 13) return asin(x); 
if (choice == 14) return acos(x); 
if (choice == 15) return atan(x); 
if (choice == 16) return log(x); // Base e. 
if (choice == 17) return log10(x); // Base 10. 
 Error(); 
} 
double CallFunction(int choice, double x, double y) 
{ 
if (choice == 1) return Addition(x, y); 
if (choice == 2) return Subtraction(x, y); 
if (choice == 3) return Multiplication(x, y); 
if (choice == 4) return Division(x, y); 
if (choice == 5) return Sqrt(x); 
if (choice == 6) return Power(x, y); 
if (choice == 7) return Exp(x); 
if (choice == 10)return Sin(x); 
if (choice == 11)return Cos(x); 
if (choice == 12)return Tan(x); 
if (choice == 13)return ArcSin(x); 
if (choice == 14)return ArcCos(x); 
if (choice == 15)return ArcTan(x); 
if (choice == 16)return Ln(x); // Base e. 
if (choice == 17)return Log(x); // Base 10. 
 Error(); 
} 
string Operator(int Choice) 
{ 
 string temp = ""; 
if (Choice == 1) temp = "\nx + y = "; 
if (Choice == 2) temp = "\nx - y = "; 
if (Choice == 3) temp = "\nx * y = "; 
if (Choice == 4) temp = "\nx / y = "; 
if (Choice == 5) temp = "\nSquare Root(x) = "; 
if (Choice == 6) temp = "\nx ^ y = "; 
if (Choice == 7) temp = "\ne^ (x) = "; 
if (Choice == 8) temp = "\nx (mod y) = "; 
if (Choice == 10)temp = "\nsin(x) = "; 
if (Choice == 11)temp = "\ncos(x) = "; 
if (Choice == 12)temp = "\ntan(x) = "; 
if (Choice == 13)temp = "\narcsin(x) = "; 
if (Choice == 14)temp = "\narccos(x) = "; 
if (Choice == 15)temp = "\narctan(x) = "; 
if (Choice == 16)temp = "\nLn(x) = "; 
if (Choice == 17)temp = "\nLog(x) [Base 10] = "; 
if (temp == "") Error(); 
return temp; 
} 
void DisplayAnswer(int Choice) 
{ 
double x = GetX(); 
if (Choice == 1 || Choice == 2 || Choice == 3 || Choice == 4 || Choice 
== 6 || Choice == 8) 
 { 
double y = GetX();  - 28 - 
 cout << Operator(Choice) << setprecision(10) << 
CallFunction(Choice, x, y) << "\n"; 
 } 
else if (Choice == 5 || Choice == 7 || Choice == 10 || Choice == 11 || 
Choice == 12 || Choice == 13|| Choice == 14 || Choice == 15 || Choice == 16 
|| Choice == 17) 
 { 
 cout << Operator(Choice) << setprecision(10) << 
CallFunction(Choice, x, 0) << "\n"; 
 } 
else Error(); 
} 
int Prompt(int Reason) 
{ if (Reason != 0 && Reason != 1) Error(); 
if (Reason == 0) 
 cout << "What function of the following would you like to 
compute? "; 
if (Reason == 1) 
 cout << "What function of the following would you like estimate 
with? "; 
 cout 
 << "\n(1) Addition (10) Sin(x)" 
 << "\n(2) Subtraction (11) Cos(x)" 
 << "\n(3) Multiplication (12) Tan(x)" 
 << "\n(4) Division (13) ArcSin(x)" 
 << "\n(5) Square Root (x) (14) ArcCos(x)" 
 << "\n(6) x ^ (y) (15) ArcTan(x)" 
 << "\n(7) Exp(x) (16) Ln(x)" 
 << "\n(8) x (mod y) (17) Log(x) [Base 10]"; 
if (Reason == 0) 
 { 
 cout 
 << "\n(19) Maximum Percent Error of a Function(x)" 
 << "\n(20) Efficiency of a Function(x)" 
 << "\n(0) None, I am done"; 
 } 
 cout << "\nPlease enter the number of the function that you 
would like to compute.\n"; 
int Choice; 
 cin >> Choice; 
if (cin.fail() || Choice < 0 || Choice > 20) Error(); 
return Choice; 
} 
int main() 
{ 
try 
 { 
bool stop = false; 
int choice; 
do{ 
 choice = Prompt(0); 
if (choice == 0) stop = true; 
if (choice!= 0 && choice != 9 && choice < 18) DisplayAnswer(choice); 
if (choice == 19) MaxPercentErrorEstimator(); 
if (choice == 20) EfficiencyEstimator(); 
 cout << "\n"; 
 } while(stop == false);  - 29 - 
 } 
catch (ReturnError) 
 { 
 cin.clear(); 
 cout << "Error: Invalid Entry!\nProgram will be Restarted.\nPush 
any key and 'Enter' to continue...\n"; 
 string temp; 
 cin >> temp; 
 cin.clear(); 
 main(); 
 } 
return 0; 
} 
void Error() 
{ 
throw ReturnError(0); 

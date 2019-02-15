#include <iostream>
#include <iomanip>
#include <string>
#include <fstream>
#include <sstream> 
#include <stdlib.h>
using namespace std;

int main(){
	ifstream Infile("modernizr.custom.40753.js");
	ofstream OutFile("modernizr.custom.40754.js");

	string temp;

	while(!Infile.eof()){
		getline(Infile,temp,';');
		OutFile << temp  << endl;
	}
}
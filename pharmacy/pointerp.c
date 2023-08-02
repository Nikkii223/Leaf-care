#include<stdio.h>
#include<conio.h>
void main()
{
	int *a;
	int b,c;
	clrscr();

	b=5;
	a=&b;
	c=*a;

	printf("\n a : %d",a);
	printf("\n b : %u",b);
	printf("\n b : %d",*b);
	printf("\n c : %d",c);

	getch();
}
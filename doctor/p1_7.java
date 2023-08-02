import java.util.Scanner;

class p1_7
{
	public static void main(String[] args)
	 {

	 	Scanner c = new Scanner(System.in)
	 	
	 		System.out.println("Enter the amount : ");

	 		int a = c.nextInt();

	 		int w;
	 		int p=w/100;
	 		 w=w%100;

	 		int q=w/50;
	 		  w=w%50;

	 		int r=w/10;
 			 w=w%10;
			
			int s=w/5;
			 w=w%5;

			 int t=w/2;
			 w=w%2;
			
			int  u=w/1;

	 		System.out.println("notes of 100 : " +p);
	 		System.out.println("notes of 50 : "+q);
	 		System.out.println("notes of 10 : "+r);
	 		System.out.println("notes of 5 : "+s);
	 		System.out.println("notes of 2 : "+t);
	 		System.out.println("notes of 1 : "+u);


		
	}
}
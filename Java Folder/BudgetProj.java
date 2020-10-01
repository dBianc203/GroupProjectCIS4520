
/*
 * Write a description of class BudgetProj here.
 *
 * @author (Devon Biancarelli-Milano)
 * @version (September 26th, 2020)
 */

import java.util.Scanner;

public class BudgetProj
{
    /** Scanner for user input */
    public static Scanner scan = new Scanner(System.in);
    /** double that holds the users monthly budget */
    public static double UserBudget;
    /** double that holds the input made by the user that represents a purchase made */
    public static double UserExpense;
    /** have the total expenses made by a user = to 0 */
    public static double TotalExpenses = 0;
    /** if users input is "y" the program will ask the user to enter a new expense */
    public static char MoreExpenses = 'y';
    
    public static void main (String [] args) 
    {

        
        System.out.println("How much do you want to budget for this month?");
        UserBudget = scan.nextDouble();
        
        while(MoreExpenses == 'y') {
            System.out.println("Enter an expense");
            UserExpense = scan.nextDouble();
            TotalExpenses = TotalExpenses + UserExpense;
            System.out.println("Do you have any more expenses? Enter y for yes or n or no.");
            scan.nextLine();
            MoreExpenses = scan.nextLine().charAt(0);           
        }
        
        if (TotalExpenses < UserBudget){
            System.out.println("You were under budget by " + (UserBudget - TotalExpenses));
        }
        else if(TotalExpenses > UserBudget){
            System.out.println("You were over budget by " + (TotalExpenses - UserBudget));
        }
        else {
            System.out.println("You used your exact monthly budget :)");
        }     
        
    }
}
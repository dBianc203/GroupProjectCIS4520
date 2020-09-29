
/*
 * Write a description of class BudgetProj here.
 *
 * @author (Devon Biancarelli-Milano)
 * @version (September 26th, 2020)
 */

import java.util.Scanner;

public class BudgetProj
{
    public static void main (String [] args) 
    {
        Scanner scan = new Scanner(System.in);
        double UserBudget;
        double UserExpense;
        double TotalExpenses = 0;
        char MoreExpenses = 'y';
        
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
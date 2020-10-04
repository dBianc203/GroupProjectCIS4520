
/*
 * This program allows the user to set a monthly budget for himself and input expense that
 * will inform the user if they go over or under their set budget
 *
 * @author (Devon Biancarelli-Milano)
 * @version (September 26th, 2020)
 */
import java.util.ArrayList;
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
        ArrayList<String> name = new ArrayList<String>();
        ArrayList<Double> name2 = new ArrayList<Double>();
        
        System.out.println("How much do you want to budget for this month?");
        UserBudget = scan.nextDouble();
        
        while(MoreExpenses == 'y') {
            System.out.println("Enter an expense amount");
            UserExpense = scan.nextDouble();
            name2.add(UserExpense);
            
            TotalExpenses = TotalExpenses + UserExpense;
            
            System.out.println("What do you want to name this expense?");
            name.add(scan.next());
            
            System.out.println("Do you want to see past expenses?");
            int DisplayExpense = scan.nextInt();
            if(DisplayExpense == (1))
            {
                System.out.println(name);
                System.out.println(name2);
            }
            
            
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
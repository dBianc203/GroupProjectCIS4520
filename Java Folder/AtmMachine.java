import java.util.Scanner;
/**
 * 
 * Program acts like an atm machine at your local bank
 *
 * @author (Devon Biancarelli)
 * @version (August 26th,2020)
 */
public class AtmMachine
{
  public static void main(String[] args) {
      
      int InitialBalanceCheck = 2500; /**< Creates a fake balance for a checking account*/
      int InitialBalanceSavings = 5000;/**< Creates a fake balance for a savings account */
      int Withdraw; /**< 1-6 that will determine how much is withdrawn from an account */
      int Deposit; /**< 1-6 that will determine how much is deposited into an account */
      
      Scanner Scan = new Scanner(System.in);  /**< Creates scanner to recieve input */
      
      
      boolean session = true;
      while(session){
      
      /**
       * 
       * Presents a list of options for the user to choose from
       * 
       */
      System.out.println("ATM Machine");
      System.out.println("Choose 1 for Withdraw");
      System.out.println("Choose 2 for Deposit");
      System.out.println("Choose 3 for Check Balance");
      System.out.println("Choose 4 for Quick Withdraw From Checking");
      System.out.println("Choose 5 to Exit the application");
      
      System.out.println("Choose your option");
    
      int Choice = Scan.nextInt(); /**< Allows the user input */
     
      switch(Choice) /**< Switch statement that will react based on the users input being 1 for withdraw */
      {
                /**
                 * 
                 * Will ask the user if they want to withdraw from their savings account or checking account
                 * 
                 */
          case 1:
          
          System.out.println("Do you want to withdraw from savings or checking?");
          System.out.println("1 for savings, 2 for checking");
          int Withinput = Scan.nextInt();
          
          if (Withinput == (1)) /**< If the user input is "1" it will withdraw from savings and ask for the amount */
          {
           System.out.println("How much do you want withdrawn?");
           System.out.println("Enter 1 for $20");
           System.out.println("Enter 2 for $40");
           System.out.println("Enter 3 for $60");
           System.out.println("Enter 4 for $100");
           System.out.println("Enter 5 for $200");
           System.out.println("Enter 6 for $300");
           
           Withdraw = Scan.nextInt();
          
           if(Withdraw == (1)) /**< If user input = 1 it will withdraw $20 from the savings account*/
           {
              InitialBalanceSavings = InitialBalanceSavings - (20);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
           }
            
           else if (Withdraw == (2)) /**< If user input = 2 it will withdraw $40 from the savings account*/
           {
              InitialBalanceSavings = InitialBalanceSavings - (40);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
            }
           else if (Withdraw == (3)) /**< If user input = 3 it will withdraw $60 from the savings account*/
           {
              InitialBalanceSavings = InitialBalanceSavings - (60);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
            }
           else if (Withdraw == (4)) /**< If user input = 4 it will withdraw $100 from the savings account*/
           {
              InitialBalanceSavings = InitialBalanceSavings - (100);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
            }
            else if (Withdraw == (5)) /**< If user input = 5 it will withdraw $200 from the savings account*/
           {
              InitialBalanceSavings = InitialBalanceSavings - (200);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
            }
            else if (Withdraw == (6)) /**< If user input = 6 it will withdraw $300 from the savings account*/
           {
              InitialBalanceSavings = InitialBalanceSavings - (300);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
            }
          }
        
          else if(Withinput == (2)) /**< User input chooses checking account*/
          {
           System.out.println("How much do you want withdrawn?");
           System.out.println("Enter 1 for $20");
           System.out.println("Enter 2 for $40");
           System.out.println("Enter 3 for $60");
           System.out.println("Enter 4 for $100");
           System.out.println("Enter 5 for $200");
           System.out.println("Enter 6 for $300");
           Withdraw = Scan.nextInt();

           if(Withdraw == (1)) /**< If user input = 1 it will withdraw $20 from the checking account*/
           {
              InitialBalanceCheck = InitialBalanceCheck - (20);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
           }
            
           else if (Withdraw == (2))/**< If user input = 2 it will withdraw $40 from the checking account*/
           {
              InitialBalanceCheck = InitialBalanceCheck - (40);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
            }
           else if (Withdraw == (3)) /**< If user input = 3 it will withdraw $60 from the checking account*/
           {
              InitialBalanceCheck = InitialBalanceCheck - (60);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
            }
           else if (Withdraw == (4)) /**< If user input = 4 it will withdraw $100 from the checking account*/
           {
              InitialBalanceCheck = InitialBalanceCheck - (100);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
            }
            else if (Withdraw == (5)) /**< If user input = 5 it will withdraw $200 from the checking account*/
           {
              InitialBalanceCheck = InitialBalanceCheck - (200);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
            }
            else if (Withdraw == (6)) /**< If user input = 6 it will withdraw $300 from the checking account*/
           {
              InitialBalanceCheck = InitialBalanceCheck - (300);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
            }
          }
     
          break; 
      
          case 2: /**< Switch statement that will react based on the users input being 2 for deposit */
          System.out.println("Do you want to deposit into your savings or checking?");
          System.out.println("1 for savings, 2 for checking");
          int DepositInput = Scan.nextInt();
          
          if (DepositInput == (1))/**< If user input = 1 it will deposit into the savings account & ask how much*/
          { 
              System.out.println("How much do you want to deposit?");
              System.out.println("Enter 1 for $20");
              System.out.println("Enter 2 for $40");
              System.out.println("Enter 3 for $60");
              System.out.println("Enter 4 for $100");
              System.out.println("Enter 5 for $200");
              System.out.println("Enter 6 for $300");
              Deposit = Scan.nextInt();
              if (Deposit == (1))/**< If user input = 1 it will deposit $20 into the savings account*/
              {
              InitialBalanceSavings = InitialBalanceSavings + (20);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");  
            }
            else if (Deposit == (2))/**< If user input = 2 it will deposit $40 into the savings account*/
            {
              InitialBalanceSavings = InitialBalanceSavings + (40);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");
            }
            else if (Deposit == (3))/**< If user input = 3 it will deposit $60 into the savings account*/
            {
              InitialBalanceSavings = InitialBalanceSavings + (60);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");
            }
            else if (Deposit == (4))/**< If user input = 4 it will deposit $100 into the savings account*/
            {
              InitialBalanceSavings = InitialBalanceSavings + (100);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");
            }
            else if (Deposit == (5))/**< If user input = 5 it will deposit $200 into the savings account*/
            {
              InitialBalanceSavings = InitialBalanceSavings + (200);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");
            }
            else if (Deposit == (6))/**< If user input = 6 it will deposit $300 into the savings account*/
            {
              InitialBalanceSavings = InitialBalanceSavings + (300);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");
            }
        }
         else if (DepositInput == (2)) /**< If user input = 2 it will deposit into the checking account & ask how much*/
            {
             System.out.println("How much do you want to deposit?");
             System.out.println("Enter 1 for $20");
             System.out.println("Enter 2 for $40");
             System.out.println("Enter 3 for $60");
             System.out.println("Enter 4 for $100");
             System.out.println("Enter 5 for $200");
             System.out.println("Enter 6 for $300");
             Deposit = Scan.nextInt();
             if (Deposit == (1)) /**< If user input = 1 it will deposit $20 into the checking account*/
              {
              InitialBalanceCheck = InitialBalanceCheck + (20);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");  
            }
            else if (Deposit == (2)) /**< If user input = 2 it will deposit $40 into the checking account*/
            {
              InitialBalanceCheck = InitialBalanceCheck + (40);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");
            }
            else if (Deposit == (3)) /**< If user input = 3 it will deposit $60 into the checking account*/
            {
              InitialBalanceCheck = InitialBalanceCheck + (60);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");
            }
            else if (Deposit == (4)) /**< If user input = 4 it will deposit $100 into the checking account*/
            {
              InitialBalanceCheck = InitialBalanceCheck + (100);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");
            }
            else if (Deposit == (5)) /**< If user input = 5 it will deposit $200 into the checking account*/
            {
              InitialBalanceCheck = InitialBalanceCheck + (200);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");
            }
            else if (Deposit == (6)) /**< If user input = 6 it will deposit $300 into the checking account*/
            {
              InitialBalanceCheck = InitialBalanceCheck + (300);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");
            }
        }
        break;
    
        case 3: /**< case 3 represents if the user wants to check their current balance before or after withdrawing/depositing*/
        System.out.println("Do you want to check your savings or checking?");
        System.out.println("1 for savings, 2 for checking");
        int CheckInfo = Scan.nextInt();
        
        if (CheckInfo == (1)) /**< If user input = 1 it will check the balance of the users savings account*/
        {
        System.out.println("Your Balance is : " + InitialBalanceSavings);
        System.out.println("");
    }
        if (CheckInfo == (2)) /**< If user input = 2 it will check the balance of the users checking account*/
        {
        System.out.println("Your Balance is : " + InitialBalanceCheck);
        System.out.println("");
    }
    break;
    
        case 4: /**< Withdraws $20 fromt the users checking account*/
        InitialBalanceCheck = InitialBalanceCheck - 20;
        System.out.println("Collect your moneyz");
        System.out.println("");
    break;
    
        case 5: /**< Quits the program*/
        System.out.println("Bye Bye");
         System.exit(1);
        break;
    }
}
}
}

  
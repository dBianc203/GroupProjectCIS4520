import java.util.Scanner;
/**
 * Write a description of class AtmMachine here.
 * Program acts like an atm machine at your local bank
 *
 * @author (Devon Biancarelli)
 * @version (July 26th,2020)
 */
public class AtmMachine
{
  public static void main(String[] args) {
      
      int InitialBalanceCheck = 2500;
      int InitialBalanceSavings = 5000;
      int Withdraw;
      int Deposit;
      
      Scanner Scan = new Scanner(System.in);
      
      
      boolean session = true;
      while(session){
  
      System.out.println("ATM Machine");
      System.out.println("Choose 1 for Withdraw");
      System.out.println("Choose 2 for Deposit");
      System.out.println("Choose 3 for Check Balance");
      System.out.println("Choose 4 for Quick Withdraw From Checking");
      System.out.println("Choose 5 to Exit the application");
      
      System.out.println("Choose your option");
    
      int Choice = Scan.nextInt();
     
      switch(Choice)
      {
          case 1:
          
          System.out.println("Do you want to withdraw from savings or checking?");
          System.out.println("1 for savings, 2 for checking");
          int Withinput = Scan.nextInt();
          
          if (Withinput == (1))
          {
           System.out.println("How much do you want withdrawn?");
           Withdraw = Scan.nextInt();
          
           if(Withdraw == (1)) {
              InitialBalanceSavings = InitialBalanceSavings - (20);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
           }
            
           else if (Withdraw == (2))
           {
              InitialBalanceSavings = InitialBalanceSavings - (40);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
            }
           else if (Withdraw == (3))
           {
              InitialBalanceSavings = InitialBalanceSavings - (60);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
            }
           else if (Withdraw == (4))
           {
              InitialBalanceSavings = InitialBalanceSavings - (100);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
            }
            else if (Withdraw == (5))
           {
              InitialBalanceSavings = InitialBalanceSavings - (200);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
            }
            else if (Withdraw == (6))
           {
              InitialBalanceSavings = InitialBalanceSavings - (300);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println(""); 
            }
          }
        
          else if(Withinput == (2)) 
          {
           System.out.println("How much do you want withdrawn?");
           Withdraw = Scan.nextInt();

           if(Withdraw == (1)) {
              InitialBalanceCheck = InitialBalanceCheck - (20);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
           }
            
           else if (Withdraw == (2))
           {
              InitialBalanceCheck = InitialBalanceCheck - (40);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
            }
           else if (Withdraw == (3))
           {
              InitialBalanceCheck = InitialBalanceCheck - (60);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
            }
           else if (Withdraw == (4))
           {
              InitialBalanceCheck = InitialBalanceCheck - (100);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
            }
            else if (Withdraw == (5))
           {
              InitialBalanceCheck = InitialBalanceCheck - (200);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
            }
            else if (Withdraw == (6))
           {
              InitialBalanceCheck = InitialBalanceCheck - (300);
              System.out.println("Money withdrawn successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println(""); 
            }
          }
     
          break;
      
        case 2: 
          System.out.println("Do you want to deposit into your savings or checking?");
          System.out.println("1 for savings, 2 for checking");
          int DepositInput = Scan.nextInt();
          
          if (DepositInput == (1)){
              System.out.println("How much do you want to deposit?");
              Deposit = Scan.nextInt();
              if (Deposit == (1))
              {
              InitialBalanceSavings = InitialBalanceSavings + (20);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");  
            }
            else if (Deposit == (2))
            {
              InitialBalanceSavings = InitialBalanceSavings + (40);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");
            }
            else if (Deposit == (3))
            {
              InitialBalanceSavings = InitialBalanceSavings + (60);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");
            }
            else if (Deposit == (4))
            {
              InitialBalanceSavings = InitialBalanceSavings + (100);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");
            }
            else if (Deposit == (5))
            {
              InitialBalanceSavings = InitialBalanceSavings + (200);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");
            }
            else if (Deposit == (6))
            {
              InitialBalanceSavings = InitialBalanceSavings + (300);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceSavings);
              System.out.println("");
            }
        }
         else if (DepositInput == (2))
            {
             System.out.println("How much do you want to deposit?");
             Deposit = Scan.nextInt();
             if (Deposit == (1))
              {
              InitialBalanceCheck = InitialBalanceCheck + (20);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");  
            }
            else if (Deposit == (2))
            {
              InitialBalanceCheck = InitialBalanceCheck + (40);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");
            }
            else if (Deposit == (3))
            {
              InitialBalanceCheck = InitialBalanceCheck + (60);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");
            }
            else if (Deposit == (4))
            {
              InitialBalanceCheck = InitialBalanceCheck + (100);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");
            }
            else if (Deposit == (5))
            {
              InitialBalanceCheck = InitialBalanceCheck + (200);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");
            }
            else if (Deposit == (6))
            {
              InitialBalanceCheck = InitialBalanceCheck + (300);
              System.out.println("Money deposited successfully");
              System.out.println(InitialBalanceCheck);
              System.out.println("");
            }
        }
        break;
    
        case 3:
        System.out.println("Do you want to check your savings or checking?");
        System.out.println("1 for savings, 2 for checking");
        int CheckInfo = Scan.nextInt();
        
        if (CheckInfo == (1)){
        System.out.println("Your Balance is : " + InitialBalanceSavings);
        System.out.println("");
    }
        if (CheckInfo == (2)){
        System.out.println("Your Balance is : " + InitialBalanceCheck);
        System.out.println("");
    }
    break;
    
        case 4:
        InitialBalanceCheck = InitialBalanceCheck - 20;
        System.out.println("Collect your moneyz");
        System.out.println("");
    break;
    
        case 5:
        System.out.println("Bye Bye");
         System.exit(1);
        break;
    }
}
}
}

  
#include<iostream>
#include<fstream>
#include<string.h>
#include <cstdlib>
#include<windows.h>
using namespace std;
char b[3]={'b','a','l'};
int total_acco()
{
    int total;
    ifstream in("total_account.txt",ios::in);
in>>total;
in.close();
return(total);
}

void tot_acc(char na1[],int acc,int pswd)
{
    ofstream out("accounts_list.txt",ios :: app);
    out<<na1;
    out<<" ";
    out<<acc;
    out<<" ";
    out<<pswd;
    out<<" ";
    out.close();

}
void in_total_acc(int to)
{
    ofstream ou("total_account.txt",ios :: out);
ou<<to;
ou.close();
}

void acc_det(char ww[],int acc,int pswd)
{int bal=0;
char temp_name[10];
for(int i=0;i<10;i++)
{
    temp_name[i]=ww[i];
}

    strcat(temp_name,b);
    ofstream o(ww);
    o<<ww;
    o<<" ";
o<<acc;
o<<" ";
o<<pswd;
o<<" ";
o.close();
ofstream out(temp_name);
out<<bal;
out.close();

}
void validity(char nam[])
{ int acc;
    char holdname[10];
    int flag=1;
    ifstream inn("accounts_list.txt",ios::in);
    while(! inn.eof())
    {
        string no=nam;
        inn>>holdname;
        if(holdname==no)
        {
            flag=0;
        }
    }
    if(flag==0)
    {
        cout<<"account found"<<endl;
    }
    else
    {
        cout<<"account not found"<<endl;
    inn.close();
    exit(0);
    }
}

void credit(char nam[],int amount)
{   strcat(nam,b);
int ba;
    ifstream q(nam,ios::in);
    q>>ba;
    if(amount<=0)
    {
        cout<<"!!! AMOUNT CANNOT BE LESS THAN OR EQUAL TO ZERO"<<endl;
        exit(0);
    }
    ba=amount+ba;
    q.close();
    ofstream oo(nam,ios::out);
    oo<<ba;
    cout<<"YOUR BALANCE IS "<<ba<<" "<<"RS"<<endl;
    oo.close();
}

void paswd_check(char nam[],string password)
{int flag=0;
    string p;
    ifstream in(nam,ios::in);

    while(! in.eof())
    {
    in>>p;
    if(p==password)
    {
        flag=1;
    }
    }
    if(flag==1)
    {
        cout<<"WELCOME"<<endl;
    }
    else
    {
    cout<<"!!INVALID PASSWORD"<<endl;
    exit(0);
    }
}
void debit(char nam[],int amount)
{   strcat(nam,b);
int ba;
    ifstream q(nam,ios::in);
    q>>ba;
     if(amount<=0)
    {
        cout<<"!!! AMOUNT CANNOT BE LESS THAN OR EQUAL TO ZERO"<<endl;
        exit(0);
    }
    if(amount>ba)
    {
        cout<<"YOR BALNACE IS LESS THAN THE DEBIT AMMOUNT"<<endl;
        cout<<"YOUR CURRENT BALANCE IS "<<ba<<" "<<"RS"<<endl;
        exit(0);
    }
    ba=ba-amount;
    q.close();
    ofstream oo(nam,ios::out);
    oo<<ba;
    cout<<"YOUR BALANCE IS "<<ba<<" "<<"RS"<<endl;
    oo.close();
}

void check_bal(char na[])
{
    strcat(na,b);
    int bal;
    ifstream in(na,ios::in);
    in>>bal;
    cout<<"YOUR BALANCE IS "<<endl;
    cout<<bal<<" "<<"RS"<<endl;
    in.close();
}


int main()
{
int choice;
int accno;
char name[10];
int paswd;
int total_acc;
int cre_deb;
int amt;
string pass;
do
{
    cout<<"do you have an account"<<endl;
cout<<"1-NO"<<endl;
cout<<"2-YES"<<endl;
cout<<"3-EXIT"<<endl;
cout<<"enter yor choice"<<endl;
cin>>choice;
system("cls");
switch (choice)
{
case 1:
cout<<"enter your name"<<endl;
cin>>name;
total_acc=total_acco();
total_acc=total_acc+1;
accno=total_acc;

cout<<"please set a password-it should be of 4 digits"<<endl;
cin>>paswd;
if(paswd<999||paswd>9999)
{
    cout<<"invalid password"<<endl;
    cout<<"the password should be of 4 digits"<<endl;
exit(0);
}
acc_det(name,accno,paswd);
tot_acc(name,accno,paswd);

cout<<"SUCCESFUL"<<endl;
cout<<"you account has been created"<<endl;
cout<<"your account no is "<<accno<<endl;
in_total_acc(total_acc);
break;
case 2:
    cout<<"1-CREDIT"<<endl;
    cout<<"2-DEBIT"<<endl;
    cout<<"3-BALANCE"<<endl;
    cout<<"4-EXIT"<<endl;
    cout<<"your choice"<<endl;
    cin>>cre_deb;
    system("cls");
switch(cre_deb)
{
case 1:

    cout<<"enter you name"<<endl;
    cin>>name;
    validity(name);
    cout<<"enter your password"<<endl;
    cin>>pass;
    paswd_check(name,pass);
    cout<<"enter the ammount to credit"<<endl;
    cin>>amt;
    credit(name,amt);
    break;
case 2:

    cout<<"enter you name"<<endl;
    cin>>name;
    validity(name);
    cout<<"enter your password"<<endl;
    cin>>pass;
    paswd_check(name,pass);
    cout<<"enter the ammount to debit"<<endl;
    cin>>amt;
    debit(name,amt);
    break;
case 3:
    cout<<"enter your name"<<endl;
    cin>>name;
    validity(name);
    cout<<"enter your password"<<endl;
    cin>>pass;
    paswd_check(name,pass);
    check_bal(name);
    break;

    case 4:
        exit(0);
}

}
}
while(choice!=3);

}

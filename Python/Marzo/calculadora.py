import os
#cantOper=0
op1=0
op2=0
r=0
k=0
linea=0
l2=0


file=open ("matUno.txt","r")
formula=file.readline()
 

while (formula!=""):
    
    l2=list(formula)
   
    while (l2[k]!="F"):
        if (l2[0]=="E"):
            print (l2)
            break
        else:
            if (l2[k]=="+"):
                op1=int(l2[k-1])
                op2=int(l2[k+1])
                r=op1+op2
                l2.pop(k-1)
                l2.pop(k-1)
                l2[k-1]=r
                k=k-1
            if (l2[k]=="-"):
                op1=int(l2[k-1])
                op2=int(l2[k+1])
                r=op1-op2
                l2.pop(k-1)
                l2.pop(k-1)
                l2[k-1]=r
                k=k-1
        k=k+1
        print (l2[:-2]);
    formula=file.readline()
    

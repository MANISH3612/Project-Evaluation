#PROJECT EVALUATION USING FUZZY LOGIC 

import webbrowser

#This function is used to get the index to select a particular fuzzy set.
def select(word):
    if word=='excellent' or word=='e':
        return 0
    elif word=='verygood' or word=='v':
        return 1
    elif word=='good' or word=='g':
        return 2
    elif word=='average' or word=='a':
        return 3
    elif word=='fair' or word=='f':
        return 4
    elif word=='bad' or word=='b':
        return 5
    else:
        quit(0)

#This function is used to return the grade based on the evaluated sum(score).
def output(sum):
    if sum<7.2:
        return 'A grade'
    elif sum<11.99:
        return 'B grade'
    elif sum<16.8:
        return 'C grade'
    elif sum<19.2:
        return 'D grade'
    elif sum<21.59:
        return 'E grade'
    else:
        return 'F grade'

def expert(en):
	#To save the values in a binary file.	
	import shelve
	s=shelve.open('mydata')	
	count=s['count']
	fp=open("/opt/lampp/htdocs/project/file2.txt",'w')
	fp.write(str(count))
	fp.close()
	#Connecting to localhost webpages.	
	webbrowser.open_new_tab('http://localhost/project/login.html')
	raw_input('')
	fp=open("/opt/lampp/htdocs/project/file2.txt")
	n=int(fp.readline())
	fp.close()
	if n!=0:
		#Existing expert.
		if n<=count :
			en.append(n)
			ret=s[str(n)]
			return ret
		else:
			#Wrong ID entered.
			expert(en)
	else:
		#Psychometric test.
		count=count+1
		a=[]
		#Opening file having form data.	
		fp=open("/opt/lampp/htdocs/project/file1.txt")
		for i in range(0,6):
			data=fp.readline()
			a.append(int(data[0]))
		fp.close()
		sum=0		
		for i in range(0,6):
			for j in range(0,6):
				sum=sum+abs(l[a[i]][j]-l[0][j])
		if sum <=12.8:
			s[str(count)]=1-sum*.02
		elif sum<=18.8:
			s[str(count)]=1
		else:
			s[str(count)]=1+(sum-18.8)*.02
		en.append(count)		
		ret=s[str(count)]
		s['count']=count
		return ret


#This is a list within list containing various fuzzy sets.        
l=[[1,0.8,0.6,0.4,0.2,0],[0.8,1,0.8,.6,.4,.2],[0.6,.8,1,.8,.6,.4],[.4,.6,.8,1,.8,.6],[.2,.4,.6,.8,1,.8],[0,.2,.4,.6,.8,1]]
count=1
#for indication of change
flag=0   
x=[]
en=[]

#Accepting and verifying user login credentials.
webbrowser.open_new_tab('http://localhost/project/pass.html')
raw_input('')
fp=open("/opt/lampp/htdocs/project/credentials.txt")
u=fp.readline()
p=fp.readline()
fp.close()
while(u[0:6]!="manish" or p[0:7]!="p196hql"):
	webbrowser.open_new_tab('http://localhost/project/pass1.html')	
	raw_input('')
	fp=open("/opt/lampp/htdocs/project/credentials.txt")
	u=fp.readline()
	p=fp.readline()
	fp.close()
	
#Accepting the number of experts evaluating the project
webbrowser.open_new_tab('http://localhost/project/accept.html')
raw_input('')
fp=open("/opt/lampp/htdocs/project/file2.txt")
n=int(fp.readline())
s=int(fp.readline())
fp.close()

#Accepting the expert's strictnesss of evaluation
for i in range(0,n):
    y=expert(en)
    x.append(y)

#Valid condition (atleast one expert to evaluate)
if n>0:
    #For each attribute
    fp1=open("/opt/lampp/htdocs/project/file3.txt","w")
    fp1.write(str(s))
    fp1.write("\n")
    while count<=s:
	sum=0
	#To clear the file.(as we append in php)	
	fp=open("/opt/lampp/htdocs/project/file.txt","w")
	fp.close()
	for i in range(0,n):
		fp=open("/opt/lampp/htdocs/project/file2.txt","w")
		fp.write(str(en[i]))
		fp.write("\n")
		fp.write(str(count))		
		fp.close()	
		#Connecting to localhost webpages
		webbrowser.open_new_tab('http://localhost/project/evaluation.php')
		raw_input('')
		#To wait for form entry		
	for i in range(0,6):
        	m=[0,0,0,0,0,0]
		c=1
		#Opening file having form data 
		fp=open("/opt/lampp/htdocs/project/file.txt")
		data=[]	
		w=[]	
		c=0
		#The variable p contains number of lines to be read from file.
		p=6*n
		while c<p:
			c=c+1
			char=fp.readline()
			char1=char[0]
			w.append(char1)
			if c%6==0:
				data.append(w)
 				w=[]

        	#Review of experts for that attribute
        	for j in range(0,n):
        	    #Calling function to select the fuzzy set
        	    ret=select(data[j][i])
        	    #Finding the maximum values(ORING)
        	    for k in range(0,6):
        	        #A student cannot score more than excellent
        	        if data[j][i]=='e' or data[j][i]=='excellent' and x[j]>1:
        	            res=x[j]
			    x[j]=1
        	            flag=1
        	        m[k]=max(m[k],x[j]*l[ret][k])
        	        #reversing the change done
        	        if flag==1:
        	            x[j]=res
        	            flag=0
		    fp.close()
        	#Finding the sum using fuzzy hamming distance formula
        	for j in range(0,6):
        	    sum=sum+abs(m[j]-l[0][j])
    	#Calling function to print the output
    	val=output(sum)	
	fp1.write(val)
	fp1.write("\n")
	count=count+1
    fp1.close()
    webbrowser.open_new_tab('http://localhost/project/output.php')
    raw_input('')	    	

#Invalid condition
else:
    print 'invalid input'    



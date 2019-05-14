import sys
def logout_file_handling():
	umode = sys.argv[1]
	logoutd = sys.argv[2]
	logoutt = sys.argv[3]
	umail = sys.argv[4]
	file1 = open("C:/xampp/htdocs/Project9.9bot/user/records/Probhat2.0/private/user_name_everytime/name.txt","a")#append mode 
	file1.write(umode+"-"+logoutd+" "+logoutt+"-"+umail+"\n") 
	file1.close() 

logout_file_handling()

# file_name = sys.argv[0]
# umode = sys.argv[1]
# logind = sys.argv[2]
# logint = sys.argv[3]
# uid=sys.argv[4]
# ufname=sys.argv[5]
# ulname=sys.argv[6]
# umail=sys.argv[7]
# uphno=sys.argv[8]
# ugen=sys.argv[9]
# uage=sys.argv[10]
# uidt=sys.argv[11]
# uidc=sys.argv[12]
# uidno=sys.argv[13]
# uadd=sys.argv[14]
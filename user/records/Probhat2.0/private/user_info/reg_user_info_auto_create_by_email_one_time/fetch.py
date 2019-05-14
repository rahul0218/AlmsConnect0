import os	
def session_handling(umail):
	c_index = umail.index(".")
	usmode = umail[0:6]
	umode = usmode.lower()
	logindt = umail[7:26]
	fname_exists = os.path.isfile(umail[27:c_index]+".txt")
	if fname_exists:
		if(umode=='ulogin'):
			args = []
			# open file and read the content in a list
			with open(umail[27:c_index]+".txt", 'r') as filehandle:  
				for line in filehandle:
					# remove linebreak which is the last character of the string
					currentPlace = line[:-1]
					# add item to the list
					args.append(currentPlace)
			print(args)
			if(args==[]):
				print("Session not exists")
			else:
				print("Session exists")
				if(args[5]=='Male'):
					print("Hello",args[1],args[2],"sir")
				elif(args[5]=='Female'):
					print("Hello",args[1],args[2],"madam")
				else:
					print("Hello ",args[1])
		if(umode=='glogin'):
			args = []
			# open file and read the content in a list
			with open(umail[27:c_index]+".txt", 'r') as filehandle:  
				for line in filehandle:
					# remove linebreak which is the last character of the string
					currentPlace = line[:-1]
					# add item to the list
					args.append(currentPlace)
			print(args)
			if(args==[]):
				print("Session not exists")
			else:
				print("Session exists...Your have signed up with your google profile")
				print("Hello",args[1],args[2])
				print("Please complete your profile to use all feature of bot...Thank you...!!!")
		if(umode=='logout'):
			print("Current session logged out...!!")
		if(umode not in['ulogin','glogin','logout']):
			print("Please Login to continue")
	else:
		print("Sorry the user file not exist or removed by someone else")

def file_handling():
	fname_exists = os.path.isfile("C:/xampp/htdocs/Project9.9bot/user/records/Probhat2.0/private/user_name_everytime/name.txt")
	if fname_exists:
		with open('C:/xampp/htdocs/Project9.9bot/user/records/Probhat2.0/private/user_name_everytime/name.txt', 'r') as f:
			lines = f.read().splitlines()
			umail = lines[-1]
		session_handling(umail)
	else:
		print("Sorry the root file not exist or removed by someone else")

file_handling()
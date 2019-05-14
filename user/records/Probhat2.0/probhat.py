info = "To do calculations, leave a space between the numbers and operators.\nType skills to find out what I can do.\n"

from termcolor import cprint as cp
from termcolor import colored
from mysql.connector import MySQLConnection, Error
from python_mysql_dbconfig import read_db_config
import webbrowser
import random
import wikipedia
import datetime
import wolframalpha
import time
import os
import sys
global typeSpeed

typeSpeed = 0.12

a = False




quitWords = [
'bye',
'stop',
'leave',
'have to go',
'goodbye',
'see you later',
'see ya later',
'byebye',
'bye bye',
'chow',
'leaving',
'gotta go',
'got to go',
'go get',
'see you',
'see ya',
]


kI = "i "
kHI = [
'hi',
'hello',
'hi',
'how do you do',
'hey',
'sup',
'salutations',
'greetings',
"what's up",
'howdy',
]
kNAME = [
'my name',
'i am called',
'i am known as',
'friends call me',
'people call me'
]
kDO = "do "

kCALC = [
'calculate',
'+',
'-',
'/',
'x',
'*',
'math',
'solve'
]

kYNAME = [
'your name',
'are you'
]

kTIME = [
'time',
'day',
'year',
'minute',
'now',
'current',
'present',
'date'
]

kSKILLS = [
'can you do',
'skills',
'power',
'coded to do',
'programmed to',
'made to',
'you do',
'power',
'options'
]

kRIDDLES = [
'joke',
'riddle',
'jokes',
'riddles',
'funny',
'tell me'
]

kLAUGH = [
'ha ha',
'funny',
'laugh',
'ha ha ha ha ha ha ha ha',
'hilarious',
'laughing'
]

kSETTINGS = "settings"

kAVERAGE = "average"

kTHANKS = [
"thank you",
"thanks",
'amazing',
'you are really good'
]

kCREATOR = [
'creator',
'made you',
'coded you',
'programmed you',
'created you',
'owns you'
]

kLOCATION = [
'house',
'live',
'location',
'weird time',
'wrong time'
]

kOTHER = [
'what',
'wow',
'really'
]

kAGE = [
'age',
'old',
'years',
'young'
]

kRRESPONSE = [
'Huh?',
'Change the subject.',
'Really?',
'Good to know.',
'Wow.',
'Hmmmmm...',
'Funny.',
'I do not understand.',
'Can repeat this in a different way?',
'Ok.',
'Ok.',
'Ok.',
'Ok.',
'Ok.',
'Ok.',
'Ok.',
'Ok.',
"I'm sorry?",
]

kPIGLATIN = [
'do something fun',
'do something',
'do something cool',
'speak differently',
'different languages',
'pig latin'
]

kFRIENDS = [
'do you want to be my friend',
'are you my friend',
'be my friend',
'you my friend'
]

riddles = [
'What is taller the younger and shorter the older?',
'What is brown and sticky?',
'In a neighboorhood, there was a blue house that was blue, a red house that was red, and a black house that was black. What color was the green house?',
'What gets wetter the more it dries?',
'What can you catch but not throw?',
'What can jump higher than a building?',
'What did the grape do when it got stepped on?',
'Where would fish live if they could walk on land',
'Where do fish store their money?'
]

kRESPONSE = [
'yes',
'sure',
'all right',
'no',
'maybe',
'soon',
'tomorrow',
'later',
'now',
'never',
'ok'
]

kBLAH = [
'blah',
'sdf',
'fgh',
'fj'
]

answerRiddles = [
'candle',
'stick',
'transparent',
'towel',
'cold',
'anything',
'wine',
'finland',
'riverbank'
]

responsiveGreetings = [
'Hello!',
'Howdy!',
'Hi!'
]





def way_of_print(string,speed = typeSpeed):
    for char in string:
        time.sleep(speed)
        sys.stdout.write(char)
        sys.stdout.flush()
    print("\n")


def getInput():
  global info, a
  print('\n')
  Input = input('-> ')
  if Input.lower() == "info":
    a = True
    print(info)
  return Input


def the_geetings():

    greetings = [
        'Hello, human.',
        'Greetings, non-robot.',
        'Hello, non-robot.',
        'Greetings, human.',
        'Salutations, my fellow human!',
        'Salutations, my fellow non-robot!',
        'Welcome, non-robot!',
        'Welcome, human!',
        'Hi, human!',
        'Hi, non-robot!',
        'Welcome, living-being!',
        'Hello, living-being!',
        'Hi, living-being!',
        'Greetings, living-being!',
        'Salutations, my fellow living-being!',
        'Good to see you, human!',
        'Good to see you, non-robot!',
        'Good to see you living-being!'
    ]

    way_of_print(random.choice(greetings))


def analyze(_input):
  for _ in '~ ! @ # $ % ^ & * ( ) ` _ { } [ ] : ; " \' < > ? , . /'.split():
    if _ in _input:
      _input.replace(_, '')
  a = False

  global quitWords
  global kI
  global kHI
  global kNAME
  global kDO
  global kPLAY
  global kCALC
  global kYNAME
  global kTIME
  global kSKILLS
  global kRIDDLES
  global kLAUGH
  global kSETTINGS
  global kAVERAGE
  global kTHANKS
  global kCREATOR
  global kLOCATION
  global kOTHER
  global kAGE
  global kRRESPONSE
  global kPIGLATIN
  global kFRIENDS
  global riddles
  global kRESPONSE
  global kBLAH
  global answerRiddles
  global responsiveGreetings

  if any(ext in _input.lower() for ext in quitWords):
      a = True
      way_of_print('Goodbye, I will see you later! (Hopefully)')
      sys.exit()


  return


'''def query_with_fetchone():
    try:
        dbconfig = read_db_config()
        conn = MySQLConnection(**dbconfig)
        cursor = conn.cursor()
        #cursor.execute("SELECT email FROM user")
        #cursor.execute("SELECT gender FROM user")
        #cursor.execute("SELECT name FROM user")

        row = cursor.fetchone()

        while row is not None:
            print(row)
            row = cursor.fetchone()

    except Error as e:
        print(e)

    finally:
        cursor.close()
        conn.close()
        
query_with_fetchone()'''

def login():

    return


def notloged():
    return


def login_or_not():
    name()
    loginornot = input()



def name():
    global quitWords
    the_geetings()
    gname = input("May I know your name? : ")
    gname = gname.lower()
    if gname is "yes" or "yaah" or "yah" or "yuup" or "yup" or "yap" or "yaap" or "yape" or "yupe":
        user_name=input("Okey, and that is? : ")
        f = open('C:\Users\Tanmoy\Desktop\Probhat2.0\private\user_name_everytime\gname.txt', 'a')
        f.write('\n' + user_name)
        f.close()
    elif gname is "no" or "nope" or "na":
        user_name=input("Hey there, I am sorry, then I cannot give you permission to chat." 
                        "\nIf you want, you can manually check the website.")
        yes_no = input("Are you want to exit from here (yes/no)?: ")
        yes_no = yes_no.lower()
        if yes_no is 'yes' or 'y':
            name()
        else:
            way_of_print(random.choice(quitWords))
        sys.exit()
    else:
        user_name = gname
        f = open('C:\Users\Tanmoy\Desktop\Probhat2.0\private\user_name_everytime\gname.txt', 'a')
        f.write('\n' + user_name)
        f.close()


def calculate(string):
  string = string.split()

  if '+' in string:
    index = string.index('+')
    firstnum = int(string[index-1])
    secondnum = int(string[index+1])
    way_of_print(str(firstnum+secondnum))

  if '-' in string:
    index = string.index('-')
    firstnum = int(string[index-1])
    secondnum = int(string[index+1])
    way_of_print(str(firstnum-secondnum))

  if 'x' in string:
    index = string.index('x')
    firstnum = int(string[index-1])
    secondnum = int(string[index+1])
    way_of_print(str(firstnum*secondnum))

  if '*' in string:
    index = string.index('*')
    firstnum = int(string[index-1])
    secondnum = int(string[index+1])
    way_of_print(str(firstnum*secondnum))

  if '/' in string:
    index = string.index('/')
    firstnum = int(string[index-1])
    secondnum = int(string[index+1])
    way_of_print(str(firstnum/secondnum))

calculate()


def average():
  way_of_print('How many numbers are you finding the average of?')
  numnums = input()
  nums = []
  total = 0

  for i in range(int(numnums)):
    nums.append(int(input('Enter A Number:')))

  for z in nums:
    total += int(z)
  print('Average: ' +str(total / len(nums)))

average()


while True:
  the_geetings()

  while True:
    _input = getInput()
    analyze(_input)
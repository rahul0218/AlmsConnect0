import os
from datetime import datetime, time
#Calculate the differences between Current datetime & Fetched datetime 
def date_diff_in_Seconds(cur_date_time,old_date_time):
  timedelta = cur_date_time - old_date_time
  return timedelta.days * 24 * 3600 + timedelta.seconds

#Current date & time 
cur_date_time = datetime.now()
#Fetched date & time 
old_dt='2019-05-04 14:26:19';
old_date_time  = datetime.strptime(old_dt,'%Y-%m-%d %H:%M:%S')

sec=date_diff_in_Seconds(cur_date_time,old_date_time)
print(sec)

if(sec>=1440):
	print("There is no session exists")
else:
	print("Session exists")
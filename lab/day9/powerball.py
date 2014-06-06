# Russell Schlup
# Feb 27, 2013
# SSL

import time
from random import randint
from flask import Flask, request, session, flash
import Cookie
app = Flask(__name__)

def row():
	arr = []
	strang = ''
	for i in range(0,6):
		if(i == 5):
			arr.append(randint(1,35))
			strang = strang+'  '+str(arr[i])
		else:
			arr.append(randint(1,51))
			strang = strang+str(arr[i])+', '
	return strang

@app.route("/")
def index():
	
	self.cookie = Cookie.SimpleCookie()
	self.cookie.load(string_cookie)
	
	obj = dict()
	for i in range(1,4):
		key = 'powerball'+str(i)
		obj[key] = row()

	if hasattr(session, 'counter') or session['counter'] >= 0:
		session['counter'] = session['counter'] + 1
	else:
		session['counter'] = 0

	obj['counter'] = session['counter']
	# session.clear()
	obj['date'] = time.strftime("%c")
	return str(obj)

if __name__ == '__main__':
	#set the secret key. Can be any unique value
	app.secret_key = 'zxcvbnm9'
	app.run(debug=True)
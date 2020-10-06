from flask import Flask, render_template, request
from flask_mail import *
from random import *
from datetime import datetime
app = Flask(__name__)  # initiliaze your app into flask
mail = Mail(app)

app.config["MAIL_SERVER"] = 'smtp.gmail.com' # use Simple mail Transfer Protocol
app.config["MAIL_PORT"] = 465
app.config["MAIL_USERNAME"] = 'use your gmail' # you have to permit gmail third party access
app.config['MAIL_PASSWORD'] = 'gmail-password'
app.config['MAIL_USE_TLS'] = False  # if use port 587 then TLS use True
app.config['MAIL_USE_SSL'] = True

seed(datetime.now())
otp = randint(000000, 999999)  # generate 6 digit otp


@app.route('/')
def index():
    return render_template("homepag.html")


@app.route('/verify', methods=["POST"])
def verify():
    email = request.form["email"]
    msg = Message('OTP', sender='useyouremail', recipients=[email])
    msg.body = 'Your one time pin (OTP) code is :{}'.format(str(otp))
    mail.send(msg)
    return render_template('verify.html')


@app.route('/validate', methods=["POST"])
def validate():
    user_otp = request.form['otp']
    if otp == int(user_otp):
        return "<h3> Email  verified </h3>"
    return "<h3>failure, OTP does not match</h3>"


if __name__ == '__main__':
    app.run(debug=True)

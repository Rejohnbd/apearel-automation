from flask import Flask

app = Flask(__name__)

@app.route("/")
def welcome():
    return "<p>App Running</p>"

if __name__ == '__main__':
    app.run(debug=True)
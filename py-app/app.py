from flask import Flask
import paho.mqtt.client as mqtt

app = Flask(__name__)

def on_connect(client, userdata, flags, rc):
    # This will be called once the client connects
    print(f"Connected with result code {rc}")
    # Subscribe here!
    client.subscribe("first-floor")

def on_message(client, userdata, msg):
    print(f"Message received [{msg.topic}]: {msg.payload}")

@app.route("/")
def welcome():
    return "<p>App Running</p>"

if __name__ == '__main__':
    client = mqtt.Client() 
    # client.on_connect = on_connect
    # client.on_message = on_message
    # client.username_pw_set("myusername", "password")
    client.connect('127.0.0.1', 1883)
    client.loop_start()

    app.run(debug=True, host='127.0.0.1', port=5000)
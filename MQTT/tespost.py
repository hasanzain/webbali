import paho.mqtt.client as mqtt 
from random import randint, randrange, uniform
import time

mqttBroker ="192.168.1.10" 
port = 1883
alive = 60

client = mqtt.Client()
client.connect(mqttBroker) 


randNumber = "benoa:223:34:23:32"
client.publish("data_sensor/post", randNumber)
print("Just published " + str(randNumber) + " to topic lokasi")

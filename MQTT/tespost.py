import paho.mqtt.client as mqtt 
from random import randint, randrange, uniform
import time

mqttBroker ="192.168.1.11" 
port = 1883
alive = 60

client = mqtt.Client()
client.connect(mqttBroker) 


randNumber1 = "benoa:26.5:34:23:32"
client.publish("data/sensor", randNumber1)
print("Just published " + str(randNumber1) + " to topic data/sensor")

randNumber2 = "2:benoa:Mati:Nyala:Mati:Mati:Mati:Mati:Mati:Mati"
client.publish("data/icmp", randNumber2)
print("Just published " + str(randNumber2) + " to topic data/icmp")

randNumber3 = "relay1:1"
client.publish("data/relay", randNumber3)
print("Just published " + str(randNumber3) + " to topic data/relay")

import paho.mqtt.client as mqtt 
from random import randint, randrange, uniform
import time
import threading
import requests
import json

mqttBroker ="192.168.1.10" 
port = 1883
alive = 60
global cek 
cek = "null"

client = mqtt.Client()
client.connect(mqttBroker) 

def on_message(client, userdata, message):
    data_lokasi = str(message.payload.decode("utf-8"))
    print(data_lokasi)
    buff = list(data_lokasi.split(":"))
    data_kirim = {'lokasi' : buff[0], 'suhu' : buff[1], 'arus' : buff[2], 'tegangan' : buff[3], 'daya' : buff[4]}
    r = requests.post("http://127.0.0.1/webbali/data_sensor", data = data_kirim)

# def on_message_suhu(client, userdata, message):
#     data_suhu = str(message.payload.decode("utf-8"))
#     print(data_suhu)


def thread_publish():
    while True:
        r = requests.get("http://127.0.0.1/webbali/data_sensor?limit=1&order=desc")
        data = r.json()
        datakirim = data[0]['lokasi']+":"+data[0]['suhu']+":"+data[0]['arus']+":"+data[0]['tegangan']+":"+data[0]['daya']
        # cek = "null"
        global cek
        if cek != datakirim:
            client.publish("data_sensor/get", datakirim)
            print("Just published " + str(datakirim) + " to topic " + "data_sensor/get")
            cek = datakirim
        time.sleep(1)

def thread_subscribe():
    client.subscribe("data_sensor/post")
    client.on_message=on_message
    client.loop_forever()

t1 = threading.Thread(target=thread_publish)
t1.start()
t2 = threading.Thread(target=thread_subscribe)
t2.start()

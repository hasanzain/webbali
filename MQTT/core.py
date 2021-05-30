import paho.mqtt.client as mqtt 
from random import randint, randrange, uniform
import time
import threading
import requests
import json

mqttBroker ="192.168.1.11" 
port = 1883
alive = 60
global cek 
cek = "null"
cek1 = "null"
cek2 = "null"

client = mqtt.Client()
client.connect(mqttBroker) 


def on_message_all(client, userdata, message):
    if message.topic == "data/sensor":
        data_lokasi = str(message.payload.decode("utf-8"))
        print(data_lokasi)
        buff = list(data_lokasi.split(":"))
        data_kirim = {'lokasi' : buff[0], 'suhu' : buff[1], 'arus' : buff[2], 'tegangan' : buff[3], 'daya' : buff[4]}
        r = requests.post("http://127.0.0.1/webbali/data_sensor", data = data_kirim)


    elif message.topic == "data/icmp":
        data_icmp = str(message.payload.decode("utf-8"))
        print(data_icmp)
        buff1 = list(data_icmp.split(":"))
        data_kirim1 = {'id' : buff1[0],'lokasi' : buff1[1], 'icmp_1' : buff1[2], 'icmp_2' : buff1[3], 'icmp_3' : buff1[4], 'icmp_4' : buff1[5], 'icmp_5' : buff1[7], 'icmp_6' : buff1[7], 'icmp_7' : buff1[8], 'icmp_8' : buff1[9]}
        r = requests.put("http://127.0.0.1/webbali/icmp", data = data_kirim1)
    
    elif message.topic == "data/relay":
        data_relay = str(message.payload.decode("utf-8"))
        print(data_relay)
        buff2 = list(data_relay.split(":"))
        data_kirim2 = {'nama_relay' : buff2[0], 'nilai' : buff2[1]}
        r = requests.put("http://127.0.0.1/webbali/relay", data = data_kirim2)



def thread_publish():
    while True:
        #---------------------------------Data Sensor------------------------------
        r = requests.get("http://127.0.0.1/webbali/data_sensor?limit=1&order=desc")
        data = r.json()
        datakirim = data[0]['lokasi']+":"+data[0]['suhu']+":"+data[0]['arus']+":"+data[0]['tegangan']+":"+data[0]['daya']
        # cek = "null"
        global cek
        if cek != datakirim:
            client.publish("get/sensor", datakirim)
            print("Just published " + str(datakirim) + " to topic " + "get/sensor")
            cek = datakirim

        ###########################--------------Relay----------------##########################
        r1 = requests.get("http://127.0.0.1/webbali/relay")
        data1 = r1.json()
        data1kirim = data1[0]['nama_relay']+":"+data1[0]['nilai']+":"+data1[1]['nama_relay']+":"+data1[1]['nilai']+":"+data1[2]['nama_relay']+":"+data1[2]['nilai']+":"+data1[3]['nama_relay']+":"+data1[3]['nilai']+":"+data1[4]['nama_relay']+":"+data1[4]['nilai']+":"+data1[5]['nama_relay']+":"+data1[5]['nilai']+":"+data1[6]['nama_relay']+":"+data1[6]['nilai']+":"+data1[7]['nama_relay']+":"+data1[7]['nilai']+":"
        # cek = "null"
        global cek1
        if cek1 != data1kirim:
            client.publish("get/relay", data1kirim)
            print("Just published " + str(data1kirim) + " to topic " + "get/relay")
            cek1 = data1kirim

        
        ###########################--------------ICMP----------------##########################
        r2 = requests.get("http://127.0.0.1/webbali/icmp?limit=1&order=desc")
        data2 = r2.json()
        data2kirim = data2[0]['lokasi']+":"+data2[0]['icmp_1']+":"+data2[0]['icmp_2']+":"+data2[0]['icmp_3']+":"+data2[0]['icmp_4']+":"+data2[0]['icmp_5']+":"+data2[0]['icmp_6']+":"+data2[0]['icmp_7']+":"+data2[0]['icmp_8']
        # cek = "null"
        global cek2
        if cek2 != data2kirim:
            client.publish("get/icmp", data2kirim)
            print("Just published " + str(data2kirim) + " to topic " + "get/icmp")
            cek2 = data2kirim

        

        #delay    
        time.sleep(1)

def thread_subscribe():
    client.subscribe("data/#")
    client.on_message=on_message_all


    client.loop_forever()

t1 = threading.Thread(target=thread_publish)
t1.start()
t2 = threading.Thread(target=thread_subscribe)
t2.start()

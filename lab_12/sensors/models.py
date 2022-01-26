from asyncio.windows_events import NULL
from email.policy import default
from multiprocessing.sharedctypes import Value
from django.db import models

# Create your models here.

class Sensor_Types(models.Model):
    name = models.CharField(max_length=20)
    temperature_reads = models.BooleanField(default=False)
    temperature_precision = models.FloatField(default=NULL, null=True)
    humidity_reads = models.BooleanField(default=False)
    humidity_precision = models.FloatField(default=NULL, null=True)
    pressure_reads = models.BooleanField(default=False)
    pressure_precision = models.FloatField(default=NULL, null=True)

class Sensors(models.Model):
    type_id = models.ForeignKey('Sensor_Types', on_delete=models.PROTECT)
    hwid = models.IntegerField(default = NULL, null=True)
    name = models.CharField(max_length=20)
    description = models.TextField(max_length=300)

class Sensor_Logs(models.Model):
    sensor_id = models.ForeignKey('Sensors',on_delete=models.PROTECT)
    temperature = models.FloatField(default=NULL, null=True)
    humidity = models.FloatField(default=NULL,null=True)
    pressure = models.FloatField(default=NULL,null=True)
    create_at = models.DateTimeField()
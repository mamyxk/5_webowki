from django.forms import ModelForm
from sensors.models import Sensor_Types, Sensors

class Sensor_Types_Form(ModelForm):
    class Meta:
        model = Sensor_Types
        fields = ['name','temperature_reads','temperature_precision','humidity_reads','humidity_precision','pressure_reads','pressure_precision']

class Sensor_Form(ModelForm):
    class Meta:
        model = Sensors
        fields = '__all__'
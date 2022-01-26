from django.shortcuts import redirect, render
from .forms import Sensor_Form, Sensor_Types_Form
from .models import Sensor_Types, Sensors
from django.contrib.auth.decorators import login_required

# Create your views here.

@login_required(login_url='/accounts/login/')
def SensorList(request):
    sensors = Sensors.objects.all()
    context = {"sensors": sensors}
    return render(request, 'sensors/sensorList.html', context)

@login_required(login_url='/accounts/login/')
def CreateSensor(request):
    if request.method == 'POST':
        form = Sensor_Form(request.POST)
        if form.is_valid():
            form.save()
            return redirect('/sensors/')
    else:
        form = Sensor_Form()
    return render(request,'sensors/create_sensor.html', {'form':form})

@login_required(login_url='/accounts/login/')
def CreateSensorType(request):
    if request.method == 'POST':
        form = Sensor_Types_Form(request.POST)
        if form.is_valid():
            form.save()
            return redirect('/sensors/')
    else:
        form = Sensor_Types_Form()
    return render(request,'sensors/create_type.html', {'form':form})

@login_required(login_url='/accounts/login/')
def viewSensorTypes(request):
    sensor_types = Sensor_Types.objects.all()

    context = {"sensor_types": sensor_types}
    if request.method == 'GET' and request.GET.get('id'):
        if 'bookmarks' not in request.session.keys():
            request.session['bookmarks'] = [request.GET.get('id')]
        else:
            if request.session['bookmarks'] is None:
                request.session['bookmarks'] = [request.GET.get('id')]
            if request.GET.get('id') not in request.session['bookmarks']:
                lis = request.session['bookmarks']
                lis.append(request.GET.get('id'))
                request.session['bookmarks'] = lis
    return render(request, 'sensors/sensorTypes.html', context)

@login_required(login_url='/accounts/login/')
def showBookmarks(request):
    if 'bookmarks' in request.session.keys():
        ids = request.session['bookmarks']
    else:
        ids = None
    if ids is not None:
        objects = Sensor_Types.objects.filter(id__in=ids)
        context = {'sensors': objects}
    else:
        context = {'sensors': None}

    return render(request, 'sensors/bookmarks.html', context)


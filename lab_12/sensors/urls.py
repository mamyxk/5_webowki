from django.urls import URLPattern, path
from . import views


urlpatterns = [
    path('',views.SensorList),
    path('list_sensors/',views.SensorList,name='SensorList'),
    path('create_sensor/',views.CreateSensor,name='CreateSensor'),
    path('create_type/', views.CreateSensorType, name='CreateSensorType'),
    path('sensorTypes/', views.viewSensorTypes, name='SensorTypes'),
    path('bookmarked/', views.showBookmarks, name='bookmarks')
]
from . import views
from django.urls import path

urlpatterns = [
    path('', views.home),
    path('info/', views.info),
    path('form/', views.form)
]

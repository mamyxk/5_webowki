from django.shortcuts import render
from django.http import HttpResponse, HttpRequest

# Create your views here.


def home(request):
    return render(request, "zadanie/hello.html")


def info(request:  HttpRequest):
    return render(request, "zadanie/info.html")


def form(request):
    return render(request, "zadanie/form.html")

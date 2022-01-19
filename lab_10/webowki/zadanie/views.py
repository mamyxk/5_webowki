from django.shortcuts import render
from django.http import HttpResponse, HttpRequest
from .forms import MyForm

# Create your views here.


def home(request):
    return render(request, "zadanie/hello.html")


def info(request:  HttpRequest):
    return render(request, "zadanie/info.html")


def form(request: HttpRequest):
    if request.method == "POST":
        fo = MyForm(request.POST)
    else:
        fo = MyForm()
    return render(request, "zadanie/form.html", {'form': fo})

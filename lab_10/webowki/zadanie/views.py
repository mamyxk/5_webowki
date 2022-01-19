from django.shortcuts import render, redirect
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
        if fo.is_valid():
            redirect("form/")
    else:
        fo = MyForm()
    return render(request, "zadanie/form.html", {'form': fo})

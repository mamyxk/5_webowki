from django.http import HttpRequest, HttpResponse
from django.shortcuts import render
from django.contrib.auth.decorators import login_required

# Create your views here.

@login_required(login_url='/accounts/login/')
def index(request):
    return HttpResponse("Main overview page")

def sensors(request):
    return HttpResponse("Hello world")
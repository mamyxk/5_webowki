from django.urls import URLPattern, path
from . import views


urlpatterns = [
    path('signup/', views.signup, name='signup')
]
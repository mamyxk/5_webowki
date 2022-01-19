import re

from django import forms
import re


class MyForm(forms.Form):
    subject = forms.CharField(max_length=100, required=True)
    message = forms.CharField(widget=forms.Textarea, required=True)
    sender = forms.EmailField(required=False)

    def clean_message(self):
        data = self.cleaned_data.get("message")

        if not re.match(r".*1337$", data):
            raise forms.ValidationError("The string doesn't end with 1337!")

        return data


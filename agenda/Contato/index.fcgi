#! /home/username/mydjango/bin/python
import os
import sys

from flup.server.fcgi import WSGIServer
from django.core.wsgi import get_wsgi_application

sys.path.insert(0, " /home/username /Sistema")
os.environ['DJANGO_SETTINGS_MODULE'] = "testproject.settings"

WSGIServer(get_wsgi_application()).run()
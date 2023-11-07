#!/bin/sh
ps aux|grep artisan|grep -v grep |awk '{print $2}'|xargs kill -9
nohup php artisan serve --host=0.0.0.0 --port=80 &

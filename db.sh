#!/bin/bash
set -e
service mysql start
mysql < /mysql/db.sql
service mysql stop

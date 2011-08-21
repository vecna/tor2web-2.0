#!/bin/sh
#
# Example output
# TOR2WEB CONNECTION STATISTICS
# APACHE-80: 62
# APACHE-SSL: 45
# TOR-SOCKS: 146
# PRIVOXY: 146

APACHE80=`netstat -nta | grep ESTABLISHED | awk '{ print $4}'  | grep -v 127.0.0.1 | grep -c :80`
APACHESSL=`netstat -nta | grep ESTABLISHED | awk '{ print $4}'  | grep -v 127.0.0.1 | grep -c :443`
TORSOCKS=`netstat -nta | grep ESTABLISHED | awk '{ print $4}'  | grep 127.0.0.1 | grep -c :9050`
PRIVOXY=`netstat -nta | grep ESTABLISHED | awk '{ print $4}'  | grep 127.0.0.1 | grep -c :8118`

echo 'TOR2WEB CONNECTION STATISTICS'
echo "APACHE-80: $APACHE80"
echo "APACHE-SSL: $APACHESSL"
echo "TOR-SOCKS: $TORSOCKS"
echo "PRIVOXY: $PRIVOXY"

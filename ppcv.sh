#!/bin/bash

PAGE="http://hostname/ppclipboard.php"
PASS="PASSWORD"
URL="$PAGE?p=$PASS"

GET $URL | xclip -selection c

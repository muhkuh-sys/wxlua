#!/bin/sh

test=`source-highlight --version >/dev/null 2>&1`
if [ "$?" != "0" ]; then
    echo Cannot find the 'source-highlight' executable which is required; >&2
    echo download and install it from http://www.gnu.org/software/src-highlite/ >&2
    exit 1
fi

# uses the very good source highlighting package which can be
# downloaded from:
#      http://www.gnu.org/software/src-highlite/
# (Some Linux distro do package it in binary form)
source-highlight -s lua -f xhtml luasample.lua

#!/bin/sh

# the directory where file2convert are
cmd=unix2dos
dir=`pwd`/wxLua

# do the UNIX -> DOS conversion
for f in `find $dir -name "*.dsp"`; do $cmd $f; done
for f in `find $dir -name "*.dsw"`; do $cmd  $f; done
for f in `find $dir -name "*.sln"`; do $cmd  $f; done
for f in `find $dir -name "*.vcproj"`; do $cmd  $f; done
for f in `find $dir -name "makefile.vc"`; do $cmd $f; done
for f in `find $dir -name "makefile.wat"`; do $cmd $f; done
for f in `find $dir -name "makefile.bcc"`; do $cmd $f; done

#!/bin/bash
# $Id: updatesite.sh,v 1.30 2007/02/06 22:50:13 frm Exp $

SCRIPT=`readlink -f $0`
SCRIPTPATH=`dirname $SCRIPT`

# The sourceforge ssh dir is : home/project-web/wxlua/htdocs

# script globals
export CVSROOT=:pserver:anonymous@wxlua.cvs:/cvsroot/wxlua


function updatefromcvs
{
    cd $SCRIPTPATH

    echo "Checking out website to htdocs dir from cvs"
    cvs -q update -P -C -d

    echo "Checking out the docs dir to the htdocs/docs dir from cvs"
    cd docs
    cvs -q update -P -C -d

    echo "Checking out the whole wxLua cvs repository to the htdocs/wxLua dir from cvs"
    cd ../wxLua
    cvs -q update -P -C -d
}

function updatefromsvn
{
    cd $SCRIPTPATH

    # prime the directories by checking these out first
    #svn co https://wxlua.svn.sourceforge.net/svnroot/wxlua/website ./

    echo "Updating trunk/website to ./"
    svn up ./
    
    echo "Updating trunk/wxLua/docs to docs/"
    if [ ! -d "$DIRECTORY" ]; then
        svn co https://wxlua.svn.sourceforge.net/svnroot/wxlua/trunk/wxLua/docs docs/
    else
        svn up docs/
    fi
    
    echo "Updating trunk/wxLua/ to wxLua/"
    if [ ! -d "$DIRECTORY" ]; then
        svn co https://wxlua.svn.sourceforge.net/svnroot/wxlua/trunk/wxLua wxLua/
    else
        svn up wxLua/
    fi
}

function restorepermissions
{
    echo Restoring permissions
    cd $SCRIPTPATH

    # note: the user permissions must be set, too otherwise the owner
    #       won't be able to run the files. To suppress errors which
    #       users != owner would get trying to run this script
    #       we redirect everything to /dev/null
    #chmod -R ug+rw * CVS images docs screenshots wxLua download >/dev/null 2>&1
    #chmod -R a+x *.sh CVS images docs screenshots wxLua download >/dev/null 2>&1

    for f in `find . -type f`; do chmod ug+rw $f; done
    for d in `find . -type d`; do chmod a+x   $d; done
}

function createdocs
{
    echo "Generating Doxygen documentation"
    cd $SCRIPTPATH/docs
    doxygen doxygen_website.cfg
}

function createsnapshot
{
    echo "Creating snapshot"
    cd $SCRIPTPATH/
    mkdir -p download 
    cd $SCRIPTPATH/download

    cp -rf ../wxLua .
    ./fixeol.sh
    tar -cvzf wxLua_Snapshot_`date +%F`.tar.gz \
    --wildcards --exclude=*/.svn --exclude=*.o --exclude=*.d --exclude=*.obj \
    --exclude=*.dll --exclude=*.exe --exclude=*.a --exclude=*.d --exclude=cvs \
    wxLua/*

    # remove temporary copy of wxLua modified by fixeol script
    rm -Rf wxLua
}

function removeoldsnapshots
{
    # cleanup old tarballs
    cd $SCRIPTPATH/download
    echo "Deleting snapshots created more than 1 week ago"
    find . -type f -mtime +7 -path "./wxLua_Snapshot_*" | xargs rm -f
}

#updatefromcvs
updatefromsvn

# if user called this with a non-empty argument, limit the
# update to the main website only
if [ ! -z "$1" ]; then
    echo "Not regenerating docs and snapshot as per user request."
    restorepermissions
    exit 0
fi

createdocs
#createsnapshot
#removeoldsnapshots
restorepermissions

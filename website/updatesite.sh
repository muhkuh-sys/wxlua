#!/bin/sh
# $Id: updatesite.sh,v 1.30 2007/02/06 22:50:13 frm Exp $


# script globals
export CVSROOT=:pserver:anonymous@wxlua.cvs:/cvsroot/wxlua
wxluadir="/home/groups/w/wx/wxlua/htdocs"


function updatefromcvs
{
    cd $wxluadir

    echo "Checking out website to htdocs dir from cvs"
    cvs -q update -P -C -d

    echo "Checking out the docs dir to the htdocs/docs dir from cvs"
    cd docs
    cvs -q update -P -C -d

    echo "Checking out the whole wxLua cvs repository to the htdocs/wxLua dir from cvs"
    cd ../wxLua
    cvs -q update -P -C -d
}

function restorepermissions
{
    echo Restoring permissions
    cd $wxluadir

    # note: the user permissions must be set, too otherwise the owner
    #       won't be able to run the files. To suppress errors which
    #       users != owner would get trying to run this script
    #       we redirect everything to /dev/null
    chmod -R ug+rw * CVS images docs screenshots wxLua download >/dev/null 2>&1
    chmod -R a+x *.sh CVS images docs screenshots wxLua download >/dev/null 2>&1
}

function createdocs
{
    echo "Generating Doxygen documentation"
    cd $wxluadir/docs
    doxygen doxygen_website.cfg
}

function createsnapshot
{
    echo "Creating snapshot"
    cd $wxluadir/download

    cp -rf ../wxLua .
    ./fixeol.sh
    tar \
    --wildcards --exclude=*.o --exclude=*.d --exclude=*.obj \
    --exclude=*.dll --exclude=*.exe --exclude=*.a --exclude=*.d --exclude=cvs \
    --create wxLua/* | gzip -c > wxLua_Snapshot_`date +%F`.tar.gz

    # remove temporary copy of wxLua modified by fixeol script
    rm -Rf wxLua
}

function removeoldsnapshots
{
    # cleanup old tarballs
    echo "Deleting snapshots created more than 1 week ago"
    find . -type f -mtime +7 -path "./wxLua_Snapshot_*" | xargs rm -f
}



updatefromcvs

# if user called this with a non-empty argument, limit the
# update to the main website only
if [ ! -z "$1" ]; then
    echo "Not regenerating docs and snapshot as per user request."
    restorepermissions
    exit 0
fi

createdocs
createsnapshot
removeoldsnapshots
restorepermissions

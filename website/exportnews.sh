#!/bin/bash

# Author: Francesco Montorsi
# Purpose: sample shell script to fetch your project HTML
#          (taken from http://sourceforge.net/docman/display_doc.php?docid=1502&group_id=1)
#          modified to generate XHTML code

SCRIPT=`readlink -f $0`
SCRIPTPATH=`dirname $SCRIPT`

# where the news.inc.php file will be put
destdir=$SCRIPTPATH

# get the exported XHTML (max 2 news per time since the news box is small!)
/usr/bin/wget -q -O $destdir/news.inc.php 'http://sourceforge.net/export/projnews.php?group_id=140042&limit=2&flat=0&show_summaries=1' >/dev/null

# Strip off these invalid links that Sourceforge provides
sed -i 's@"http://sourceforge.net/forum/forum.php?forum_id=957955"@"http://sourceforge.net/news/?group_id=140042"@g' $destdir/news.inc.php
sed -i 's@"http://sourceforge.net/forum/forum.php?forum_id=0"@"http://sourceforge.net/news/?group_id=140042"@g' $destdir/news.inc.php

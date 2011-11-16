#!/bin/sh

# Author: Francesco Montorsi
# Purpose: sample shell script to fetch your project HTML
#          (taken from http://sourceforge.net/docman/display_doc.php?docid=1502&group_id=1)
#          modified to generate XHTML code

# where the news.inc.php file will be put
destdir=/home/groups/w/wx/wxlua/htdocs

# get the exported XHTML (max 2 news per time since the news box is small!)
/usr/bin/wget -q -O $destdir/news.inc.php 'http://sourceforge.net/export/projnews.php?group_id=140042&limit=2&flat=0&show_summaries=1' >/dev/null
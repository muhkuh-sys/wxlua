#!/bin/bash

test=`convert --version >/dev/null 2>&1`
if [ "$?" != "0" ]; then
    echo Cannot find the 'convert' executable which is required; >&2
    echo download and install it from http://www.imagemagick.org/script/index.php >&2
    exit 1
fi

# uses the very good source highlighting package which can be
# downloaded from:
#      http://www.gnu.org/software/src-highlite/
# (Some Linux distro do package it in binary form)
for filename in `ls screenshots/*.png`; do

    size=`du -h $filename | awk '{print $1;}'`
    echo "Processing $filename (size: $size)..."

    # generate & output thumbnail
    output_filename="thumbnails/`basename $filename`";

    convert $filename -resize 100 $output_filename
    if test $? = 0; then
        size=`du -h $output_filename | awk '{print $1;}'`
        echo "    ...rendered as $output_filename (size: $size)...";
    else
        echo "Thumbnail generation failed. Stopping."
        exit 1
    fi
done

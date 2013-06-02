#!/bin/sh
#
# Simple script to pack all needed files
# for Sugar Community Edition Language-File-Module.
#
# Author: Marc Michele
# Company: T.I.V. Consulting GmbH
# Url: http://www.tiv-consulting.de
#

ZIP='/usr/bin/zip'
REMOVE='/usr/bin/rm'
FILENAME='de_DE_6.5.x.zip'

echo "Remove old file."
$REMOVE $FILENAME

echo "Create new Zip-Module-Package"
$ZIP -r -q $FILENAME include modules manifest.php

echo "Done"

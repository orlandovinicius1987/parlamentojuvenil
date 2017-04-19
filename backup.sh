#!/bin/bash
#
# Using backup-manager to upload
#
#  bash \
#    backup.sh \
#    <database name> \
#    <laravel database connection> \
#    <destination> \
#    <hostname> \
#    <artisan path>
#
#  -- Example
#
#  bash \
#    backup.sh \
#    kallzenter \
#    postgresql \
#    s3 \
#    corinna \
#    /var/www/kallzenter/
#

DATABASE=$1

CONNECTION=$2

DESTINATION=$3

HOST=$4

APP_PATH=$5

YEAR="$(date +'%Y')"

MONTH="$(date +'%m')"

NOW="$(date +'%Y-%m-%dT%H-%M-%S')"

FILE="$HOST-$DATABASE-$NOW.$CONNECTION.backup"

LOCAL_PATH="/tmp/$FILE"

REMOTEPATH="/servers/$HOST/databases/$DATABASE/$YEAR/$MONTH/$FILE"

echo "Backuping and uploading to $REMOTEPATH..."

/usr/bin/php $APP_PATH/artisan db:backup --database=$CONNECTION --destination=$DESTINATION --destinationPath=$REMOTEPATH --compression=gzip

echo
echo "All DONE!"
echo

#!/bin/bash

#
# Author: Aparajithan Venkateswaran
#

# Check if argument is provided
if [ -z "$1" ]
	then
		echo "Usage: GradesAwk.sh filename"
		exit 1
fi

file=$1
temp='temp.txt'

# Sort the file
awk -F ' ' '{ print $0 | "sort -k3,3 -k2,2 -k1 -d" }' $file > $temp

# Print the output
awk -F ' ' '{print int(($4 + $5 + $6)/3), $1="["$1"]", $3=$3",", $2}' $temp

# Remove temporary files
rm $temp

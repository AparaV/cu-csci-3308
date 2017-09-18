#!/bin/bash

#
# Author: Aparajithan Venkateswaran
#

# Check if argument is provided
if [ -z "$1" ]
	then
		echo "Usage: Grades.sh filename"
		exit 1
fi

file=$1
temp='temp.txt'

# Sort by column 3 then column 2
sort -k3,3 -k2,2 -k1 -d $file > $temp

# Read file based on columns
while read -r col1 col2 col3 col4 col5 col6
do
	# Remove the new line at the end of column 6 and calculate average
	col6=$(echo $col6|tr -d '\r')
	avg=$(((col4 + col5 + col6) / 3))

	# Print out the answer in expected format
	echo $avg [$col1] $col3, $col2

done < $temp 

# Remove the temporary file
rm $temp

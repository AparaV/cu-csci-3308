#!/bin/bash

#
# Author: Aparajithan Venkateswaran
#

# Check if argument is provided
if [ -z "$1" ]
	then
		echo "Usage: RegexAnswers.sh filename"
		exit 1
fi

file=$1

# Question 1
grep [0-9]$ $file | wc -l

# Question 2
grep ^[^AEIOUaeiou] $file | wc -l

# Question 3
grep ^[A-Za-z][A-Za-z][A-Za-z][A-Za-z][A-Za-z][A-Za-z][A-Za-z][A-Za-z][A-Za-z][A-Za-z][A-Za-z][A-Za-z]$ $file | wc -l

# Question 4
grep ^[0-9][0-9][0-9]-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]$ $file | wc -l

# Question 5
grep ^303-[0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]$ $file | wc -l

# Question 6
grep ^[AEIOUaeiou].*[0-9]$ $file | wc -l

# Question 7
grep ^.*@.*\..*$ $file | grep geocities.com$ | wc -l

# Question 8
total=`grep ^.*@.*\..*$ $file | wc -l`
valid=`grep ^.*@.*\..*$ $file | grep .[cenoim][oderni][mutgtl]$ | wc -l`
invalid=$(($total-$valid))
echo $invalid

#!/bin/bash

file=$1

sed 's/[A-Za-z]//g' $1 | sed 's/[0-9]/_/g'

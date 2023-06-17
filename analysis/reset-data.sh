#!/usr/bin/env bash

mv ../data/app/public/user/avatars/default.jpg default.jpg

rm -rf ../data/app/private/homework_*
rm -rf ../data/app/public/user/avatars/*
rm -rf ../data/db/*
rm -rf ../data/offensive/token-crawler/*

mv default.jpg ../data/app/public/user/avatars/default.jpg


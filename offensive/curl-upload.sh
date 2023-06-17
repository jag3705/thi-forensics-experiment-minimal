#!/usr/bin/env bash

curl -i -X POST   -H "Content-Type: multipart/form-data"  -F "avatar=@test.png" http://backend.thi-app.test/api/v1/users/avatar
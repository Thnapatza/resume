git pull
docker stop app-profile
docker build -t vue/resume .
docker run -d -p 4000:80 --rm --name app-profile vue/resume
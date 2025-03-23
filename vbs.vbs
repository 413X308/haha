Set UAC = CreateObject("Shell.Application")
UAC.ShellExecute "reg.exe", "import ""C:\Users\ngocadmin\Downloads\reg.reg""", "", "runas", 1

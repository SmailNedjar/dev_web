temperature_ambiante=float(input("temperature ambiante :"))
tmperature_bassin=float(input("temperature bassin :"))

difference_temperature = abs(temperature_ambiante-tmperature_bassin)
if(difference_temperature<20 or difference_temperature>40):
    print("alarme")

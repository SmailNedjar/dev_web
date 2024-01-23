

from seance_14.classes.Elf import Elf
from seance_14.classes.Orc import Orc


orc = Orc("Didier")
elf = Elf("dobby")


while orc.health > 0 and elf.health >0:

    orc.attack(elf)
    elf.attack(orc)
#print(orc.pseudo)
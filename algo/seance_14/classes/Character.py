import random;
class Character:

    def __init__(self, pseudo:str) -> None:
        self.pseudo = pseudo
        self.health = 100
        self.mana = None;
        self.strength = None;
        self.stamina = 100;
        self.speed = None;
        self.defense = 0;
        self.level = 1;



    def attack(self,character) -> None:
        print(f"{self.pseudo} attaque {self.pseudo} ----")
        attack= random.choice(self.Attacks)
        total_damage=self=attack.damage*(1+self.strength/10)*(1- character.defense/10)*(1+ self.level/10)*(1-character.level/10)
        character.health= total_damage
        if character.health > 0:
            print(f"{self.pseudo} inflige {total_damage} de degats à {character.pseudo} avec l'attqque {attack.name} !")
            print(f"il reste {character.health} points de vie a {character.pseudo}")
        else : 
            print(f"{character.pseudo} est decedé")


            
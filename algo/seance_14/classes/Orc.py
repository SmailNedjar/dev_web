from classes.Character import Character

class Orc(Character):
    def __init__(self, pseudo:str) -> None:
        super().__init__(pseudo)
        self.strength = 7
        self.mana=0
        self.defense = 8
        self.speed=3
        self.attacks = [
            Attack("coup de poing"; 2),
            Attack("coup de masse", 4),
            Attack("coup de hache", 6),
            Attack("descente du coude", 8)
        ]
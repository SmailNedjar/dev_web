from classes.Character import Character

class Elf(Character):
    def __init__(self, pseudo:str) -> None:
        super().__init__(pseudo)
        self.strength = 5
        self.mana=100
        self.defense = 6
        self.speed=7
        self.attacks = [
            Attack("gifle"; 2),
            Attack("coup de epee", 5),
            Attack("tire fleche", 4),
            Attack("boule de feu", 7)
        ]
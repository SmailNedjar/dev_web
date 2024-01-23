#Faire un programme permettant de trouver la lettre qui est la plus présente dans un texte et afficher le nombre de fois.



texte="Chers étudiants de la classe RAN2,Aujourd'hui, nous voulons vous rappeler à quel point vous êtes exceptionnels. Vous avez entrepris un voyage passionnant vers le monde de la programmation, et vous avez déjà parcouru une grande partie du chemin. Les défis qui se présentent à vous peuvent sembler intimidants, mais n'oubliez jamais que vous avez le pouvoir de les surmonter.La programmation n'est pas seulement un ensemble de compétences techniques, c'est une forme d'art. Chaque ligne de code que vous écrivez est une œuvre d'art en soi, une expression de votre créativité et de votre ingéniosité. Vous avez le potentiel de créer des applications, des sites Web et des logiciels qui changeront le monde.N'ayez pas peur des erreurs, car ce sont les erreurs qui vous font grandir. Chaque bug que vous corrigez, chaque problème que vous résolvez, vous rapproche de la maîtrise de cette discipline complexe. Les difficultés ne sont que des opportunités déguisées pour apprendre et grandir.N'oubliez pas non plus que vous n'êtes pas seuls dans cette aventure. Votre classe est une équipe, une communauté de personnes partageant la même passion et les mêmes défis. En travaillant ensemble, en partageant vos connaissances et en vous soutenant mutuellement, vous pouvez accomplir des choses incroyables.Vous avez choisi un chemin exigeant, mais aussi incroyablement gratifiant. Vous êtes les créateurs de demain, les constructeurs du futur. Ne perdez jamais de vue vos rêves et vos aspirations. Continuez à travailler dur, à rester curieux et à repousser vos limites.Nous croyons en vous, et nous sommes impatients de voir les merveilles que vous créerez. Alors, en avant, développeurs RAN2 ! Le monde a besoin de votre talent, de votre passion et de votre détermination. Vous êtes capables de tout, et nous sommes fiers de vous accompagner dans cette aventure extraordinaire.Bon courage, et que le code soit avec vous !Avec tout notre soutien, l'équipe MNS."
occurence=0;
occurence_max = 0;
lettre_max = "";
texte=texte.lower();
deja_vue=[];
#texte=texte.replace(" ","");
for i in range(0, len(texte)):
    if texte[i] not in deja_vue:
        for j in range(0, len(texte)):
            if(texte[i] !=" " and texte[i] == texte[j]):
                occurence = occurence + 1;
                
        if(occurence >= occurence_max):
            occurence_max = occurence;
            lettre_max =texte[i];
        occurence = 0;
        deja_vue=deja_vue+[texte[i]];

print(f"la lettre {lettre_max} qui apparait {occurence_max} fois dans le texte est la lettre qui apparait le plus grand nomre de fois")





#autre solution
texte="Chers étudiants de la classe RAN2,Aujourd'hui, nous voulons vous rappeler à quel point vous êtes exceptionnels. Vous avez entrepris un voyage passionnant vers le monde de la programmation, et vous avez déjà parcouru une grande partie du chemin. Les défis qui se présentent à vous peuvent sembler intimidants, mais n'oubliez jamais que vous avez le pouvoir de les surmonter.La programmation n'est pas seulement un ensemble de compétences techniques, c'est une forme d'art. Chaque ligne de code que vous écrivez est une œuvre d'art en soi, une expression de votre créativité et de votre ingéniosité. Vous avez le potentiel de créer des applications, des sites Web et des logiciels qui changeront le monde.N'ayez pas peur des erreurs, car ce sont les erreurs qui vous font grandir. Chaque bug que vous corrigez, chaque problème que vous résolvez, vous rapproche de la maîtrise de cette discipline complexe. Les difficultés ne sont que des opportunités déguisées pour apprendre et grandir.N'oubliez pas non plus que vous n'êtes pas seuls dans cette aventure. Votre classe est une équipe, une communauté de personnes partageant la même passion et les mêmes défis. En travaillant ensemble, en partageant vos connaissances et en vous soutenant mutuellement, vous pouvez accomplir des choses incroyables.Vous avez choisi un chemin exigeant, mais aussi incroyablement gratifiant. Vous êtes les créateurs de demain, les constructeurs du futur. Ne perdez jamais de vue vos rêves et vos aspirations. Continuez à travailler dur, à rester curieux et à repousser vos limites.Nous croyons en vous, et nous sommes impatients de voir les merveilles que vous créerez. Alors, en avant, développeurs RAN2 ! Le monde a besoin de votre talent, de votre passion et de votre détermination. Vous êtes capables de tout, et nous sommes fiers de vous accompagner dans cette aventure extraordinaire.Bon courage, et que le code soit avec vous !Avec tout notre soutien, l'équipe MNS."
lettre_max = "";
texte_max = 0;
texte=texte.lower();
for i in texte:
    if(texte.count(i) >= texte_max and i !=" "):
        lettre_max = i;
        texte_max=texte.count(i)
print(f"la lettre {lettre_max} apparait {texte_max} fois");








#autre solution
from collections import defaultdict

text = "Chers étudiants de la classe RAN2,Aujourd'hui, nous voulons vous rappeler à quel point vous êtes exceptionnels. Vous avez entrepris un voyage passionnant vers le monde de la programmation, et vous avez déjà parcouru une grande partie du chemin. Les défis qui se présentent à vous peuvent sembler intimidants, mais n'oubliez jamais que vous avez le pouvoir de les surmonter.La programmation n'est pas seulement un ensemble de compétences techniques, c'est une forme d'art. Chaque ligne de code que vous écrivez est une œuvre d'art en soi, une expression de votre créativité et de votre ingéniosité. Vous avez le potentiel de créer des applications, des sites Web et des logiciels qui changeront le monde.N'ayez pas peur des erreurs, car ce sont les erreurs qui vous font grandir. Chaque bug que vous corrigez, chaque problème que vous résolvez, vous rapproche de la maîtrise de cette discipline complexe. Les difficultés ne sont que des opportunités déguisées pour apprendre et grandir.N'oubliez pas non plus que vous n'êtes pas seuls dans cette aventure. Votre classe est une équipe, une communauté de personnes partageant la même passion et les mêmes défis. En travaillant ensemble, en partageant vos connaissances et en vous soutenant mutuellement, vous pouvez accomplir des choses incroyables.Vous avez choisi un chemin exigeant, mais aussi incroyablement gratifiant. Vous êtes les créateurs de demain, les constructeurs du futur. Ne perdez jamais de vue vos rêves et vos aspirations. Continuez à travailler dur, à rester curieux et à repousser vos limites.Nous croyons en vous, et nous sommes impatients de voir les merveilles que vous créerez. Alors, en avant, développeurs RAN2 ! Le monde a besoin de votre talent, de votre passion et de votre détermination. Vous êtes capables de tout, et nous sommes fiers de vous accompagner dans cette aventure extraordinaire.Bon courage, et que le code soit avec vous !Avec tout notre soutien, l'équipe MNS."
chars = defaultdict(int)
max=0;
text=text.lower();
for char in text:   
    chars[char] += 1; 
    if(chars[char]>=max and char!=" "):
        max=chars[char];
        lettre_max=char;
print(f"la lettre {lettre_max} apparait {max} fois");

#affichage le nombre de foi de chaque lettre dans le texte
for char in chars:
    print(f"{char} : {chars[char]}");





INSERT INTO `role` ( `ID_Faction`, `Name`, `Description`, `isUnique`, `activeAtNight`) VALUES
(
    '1',
    'Corbeau',
    "Il peut désigner un joueur chaque nuit, qui recevra de facto un vote le lendemain.",
    '1',
    '1'
),
(
    '1',
    'Cupidon',
    "Durant la toute première nuit de la partie, il va désigner 2 personnes qui seront secrètement amoureuses jusqu'à la fin du jeu.
    Si l'une des deux personnes vient à mourir, l'autre meurt immédiatement de désespoir. Les Amoureux ne peuvent en aucune façon voter l'un contre l'autre.

    Si les 2 amoureux font partie de la même faction
    (2 Villageois, 2 Loups-Garous), ils conservent leur objectif. Sinon (ex : 1 Villageois + 1 Loup-Garou), ils ont pour but d’être les 2 derniers survivants.",
    '1',
    '1'
),
(
    '1',
    'Fouine',
    "Elle peut savoir chaque nuit si la personne qu’elle désigne s'est réveillée ou non. Si oui, le MJ lui dit si le joueur assis à droite de cette dernière s’est réveillée ou non.
    Par exemple, le Chasseur ne se réveille jamais, car il n'a rien à faire de nuit.
    La Sorcière ne se réveillera plus quand elle n'aura plus de potion, Cupidon ne se réveille que la 1ère nuit, etc...
    En revanche : des rôles comme la Voyante, les Loups-Garous ou encore le Joueur de Flûte se réveillent chaque nuit.",
    '1',
    '1'
),
(
    '1',
    'Honnête Homme',
    "Au début d’un tour de son choix,
    il peut révéler sa véritable nature :

    celle d’être un simple Villageois.",
    '1',
    '1'
);